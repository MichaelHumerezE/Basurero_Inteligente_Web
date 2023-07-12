<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Http\Requests\StoreDatasetRequest;
use App\Http\Requests\UpdateDatasetRequest;
use App\Models\Basura;
use App\Models\Distrito;
use App\Models\establecimiento;
use App\Models\Horario;
use App\Models\Recepcion;
use App\Models\Ruta;
use App\Models\Zona;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Aws\ForecastService\ForecastServiceClient;
use Aws\S3\S3Client;
use DateTime;

date_default_timezone_set('America/La_Paz');

class DatasetController extends Controller
{
    protected $forecast;
    protected $s3Client;

    public function __construct()
    {
        $this->forecast = new ForecastServiceClient([
            'version' => 'latest',
            'region' => env('AWS_DEFAULT_REGION'),
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);

        $this->s3Client = new S3Client([
            'version' => 'latest',
            'region' => env('AWS_DEFAULT_REGION'),
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datasets = Dataset::select('*')->orderBy('id', 'ASC');
        $limit = (isset($request->limit)) ? $request->limit : 10;
        if (isset($request->search)) {
            $datasets = $datasets->where('id', 'like', '%' . $request->search . '%')
            ->orWhere('nombres', 'like', '%' . $request->search . '%');
        }
        $datasets = $datasets->paginate($limit)->appends($request->all());
        return view('datasets.index', compact('datasets'));
    }

    public function query($id)
    {
        $basuras = Basura::get();
        $establecimientos = establecimiento::get();
        $distritos = Distrito::get();
        $zonas = Zona::get();
        $horarios = Zona::get();
        $rutas = Ruta::get();
        return view('datasets.query', compact('basuras', 'establecimientos', 'distritos', 'zonas', 'horarios', 'rutas'));
    }

    public function queryStore(Request $request)
    {
        $names = [];
        $id_basura = $request->input('id_basura');
        $id_establecimiento = $request->input('id_establecimiento');
        $id_distrito = $request->input('id_distrito');
        $id_zona = $request->input('id_zona');
        $id_horario = $request->input('id_horario');
        $id_ruta = $request->input('id_ruta');
        $fecha_ini = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');
        $recorrido = Recepcion::query();
        if ($id_basura != '') {
            $basura = Basura::findOrFail($id_basura);
            array_push($names, 'Basura: ');
            array_push($names, $basura->tipo);
            $recorrido = $recorrido->where('id_basura', $id_basura);
        }
        if ($id_zona != '') {
            $zona = Zona::findOrFail($id_zona);
            array_push($names, 'Zona: ');
            array_push($names, $zona->nombre);
            $recorrido = $recorrido->join('recorridos', 'recepcions.id_recorrido', '=', 'recorridos.id')
                ->join('rutas', 'recorridos.id_ruta', '=', 'rutas.id')
                ->join('establecimientos', 'rutas.id', '=', 'establecimientos.id_ruta')
                ->join('distritos', 'establecimientos.id_distrito', '=', 'distritos.id')
                ->join('zonas', 'distritos.id_zona', '=', 'zonas.id')->where('zonas.id', $id_zona);
        }
        if ($id_distrito != '') {
            $distrito = Distrito::findOrFail($id_distrito);
            array_push($names, 'Distrito: ');
            array_push($names, $distrito->nombre);
            $recorrido = $recorrido->join('recorridos', 'recepcions.id_recorrido', '=', 'recorridos.id')
                ->join('rutas', 'recorridos.id_ruta', '=', 'rutas.id')
                ->join('establecimientos', 'rutas.id', '=', 'establecimientos.id_ruta')
                ->join('distritos', 'establecimientos.id_distrito', '=', 'distritos.id')->where('distritos.id', $id_distrito);
        }
        if ($id_establecimiento != '') {
            $establecimiento = establecimiento::findOrFail($id_establecimiento);
            array_push($names, 'Establecimiento: ');
            array_push($names, $establecimiento->nombre);
            $recorrido = $recorrido->join('recorridos', 'recepcions.id_recorrido', '=', 'recorridos.id')
                ->join('rutas', 'recorridos.id_ruta', '=', 'rutas.id')
                ->join('establecimientos', 'rutas.id', '=', 'establecimientos.id_ruta')->where('establecimientos.id', $id_establecimiento);
        }
        if ($id_ruta != '') {
            $ruta = Ruta::findOrFail($id_ruta);
            array_push($names, 'Ruta: ');
            array_push($names, $ruta->nombre);
            $recorrido = $recorrido->join('recorridos', 'recepcions.id_recorrido', '=', 'recorridos.id')
                ->join('rutas', 'recorridos.id_ruta', '=', 'rutas.id')->where('rutas.id', $id_ruta);
        }
        if ($id_horario != '') {
            $horario = Horario::findOrFail($id_horario);
            array_push($names, 'Horario: ');
            array_push($names, $horario->dia_semana + '-' + $horario->hora_inicio + '-' + $horario->hora_fin);
            $recorrido = $recorrido->join('recorridos', 'recepcions.id_recorrido', '=', 'recorridos.id')
                ->join('rutas', 'recorridos.id_ruta', '=', 'rutas.id')->where('rutas.id', $id_ruta)
                ->join('horarios', 'rutas.id_horario', '=', 'horarios.id')->where('horarios.id', $id_horario);
        }
        $recorrido = $recorrido->select('recepcions.id', 'recepcions.fechaHora', 'recepcions.cantidad')->where('recepcions.fechaHora', '>=', $fecha_ini)->where('recepcions.fechaHora', '<=', $fecha_fin)
            ->orderBy('recepcions.fechaHora', 'ASC')->get();
        // CSV
        $filename = date('Y-m-d H:i:s') . '.csv';
        $filename = str_replace([':', ' ', '-'], '_', $filename);
        $file = fopen($filename, 'w');
        fputcsv($file, ['timestamp', 'target_value', 'item_id']);
        foreach ($recorrido as $rec) {
            $dateTime = new DateTime($rec->fechaHora);
            $timestamps = $dateTime->format('Y-m-d H:i:s');
            fputcsv($file, [$timestamps, $rec->cantidad, 1]);
        }
        fclose($file);
        // Guardar el archivo en S3
        $disk = Storage::disk('s3');
        $disk->put('datasets/' . $filename, file_get_contents($filename), 'public');
        // Eliminar el archivo local después de guardarlo en S3
        unlink($filename);
        // Obtener la URL permanente del archivo
        $carpeta = 'datasets/' . $filename;
        $enlace = $disk->url($carpeta);
        Dataset::create([
            'url' => $enlace,
            'carpeta' => $carpeta,
            'filename' => $filename,
            'nombres' => json_encode($names)
        ]);
        return redirect(route('datasets.index'));
    }

    function str_putcsv($data, $delimiter = ',', $enclosure = '"')
    {
        $str = '';
        foreach ($data as $field) {
            $str .= $enclosure . str_replace($enclosure, $enclosure . $enclosure, $field) . $enclosure . $delimiter;
        }
        return rtrim($str, $delimiter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDatasetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataset = Dataset::findOrFail($id);
        $result = $this->s3Client->getObject([
            'Bucket' => env('AWS_BUCKET'),
            'Key'    => $dataset->carpeta,
        ]);
    
        $csvContent = $result['Body']->getContents();
        dd($csvContent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataset = Dataset::findOrFail($id);
        $archivoS3 = $this->s3Client->getObject([
            'Bucket' => env('AWS_BUCKET'),
            'Key' => $dataset->carpeta,
        ]);
        $contenidoArchivo = $archivoS3['Body']->getContents();
        //dd($contenidoArchivo);
        $name = date('Y-m-d H:i:s');
        $name = str_replace([':', ' ', '-'], '_', $name);
        // Dominio
        /*$response = $this->forecast->createDomain([
            'DomainName' => 'dominio_' . $name,
            'DatasetGroupName' => 'dataset_group' . $name,
        ]);*/
        $arnDominio = 'arn:aws:forecast:us-east-1:630886284847:dataset-group/dataset_group';
        // Dataset
        $response = $this->forecast->createDataset([
            'DomainArn' => $arnDominio, // Reemplaza con el ARN del dominio creado anteriormente
            'DatasetType' => 'TARGET_TIME_SERIES',
            'DatasetName' => 'dataset_' . $name,
            // Agrega otros parámetros específicos del conjunto de datos según tus necesidades
        ]);
        $nombreDataset = $response['DatasetArn'];
        //
        $response = $this->forecast->createDatasetImportJob([
            'DatasetImportJobName' => 'datasetImportJob' . $name,
            'DatasetArn' => $arnDominio . '/' . $nombreDataset,
            'DataSource' => [
                'S3Config' => [
                    'Path' => $dataset->carpeta,
                    'RoleArn' => 'arn:aws:iam::630886284847:user/proy-event-foto', // Reemplaza con el ARN del rol de IAM con acceso a S3
                ],
            ],
            'TimestampFormat' => 'yyyy-MM-dd HH:mm:ss',
        ]);
        //
        $nombreModelo = 'modelo' . $name; // Reemplaza con el nombre del modelo en Forecast

        $response = $this->forecast->createForecast([
            'ForecastName' => 'pronostico' . $name,
            'PredictorArn' => $arnDominio . '/' . $nombreModelo,
        ]);
        //
        $arnPronostico = $response['ForecastArn'];

        $response = $this->forecast->getForecast([
            'ForecastArn' => $arnPronostico,
        ]);

        $resultadosPronostico = $response['Forecast']['Predictions'];
        dd($resultadosPronostico);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDatasetRequest  $request
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataset  $dataset
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataset = Dataset::findOrFail($id);
        try {
            $carpeta = $dataset->carpeta;
            $dataset->delete();
            Storage::disk('s3')->delete($carpeta);
            return redirect()->route('datasets.index')->with('message', 'Se han borrado los datos correctamente.');
        } catch (QueryException $e) {
            return redirect()->route('datasets.index')->with('danger', 'Datos relacionados, imposible borrar dato.');
        }
    }
}
