<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;

class EmpleadoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-empleado|crear-empleado|editar-empleado|borrar-empleado', ['only' => 'index']);
        $this->middleware('permission:ver-empleado', ['only' => 'show']);
        $this->middleware('permission:crear-empleado', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-empleado', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-empleado', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$empleados = User::get()->where('tipoe','=','1');
        $empleados = User::select('*')->orderBy('id','ASC')->where('tipoe','=',1);
        $limit = (isset($request->limit)) ? $request->limit:10;
        if(isset($request->search)){
            $empleados = $empleados->where('id','like','%'.$request->search.'%')
            ->orWhere('name','like','%'.$request->search.'%')
            ->orWhere('apellidos','like','%'.$request->search.'%')
            ->orWhere('email','like','%'.$request->search.'%')
            ->orWhere('ci','like','%'.$request->search.'%')
            ->orWhere('sexo','like','%'.$request->search.'%')
            ->orWhere('phone','like','%'.$request->search.'%')
            ->orWhere('domicilio','like','%'.$request->search.'%')
            ->orWhere('estado','like','%'.$request->search.'%');
        }
        $empleados = $empleados->paginate($limit)->appends($request->all());
        return view('empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('empleados.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        /*$empleado = new User();
        $empleado = $this->crearUpdate($request, $empleado);
        return redirect()->route('empleados.index')->with('message', 'Se han creado los datos correctamente.');*/
        $this->validate($request, ['roles' => 'required']);
        $user = User::create($request->validated());
        $user->assignRole($request->input('roles'));
        return redirect()->route('empleados.index')->with('mensaje', 'Empleado Agregado Con Éxito');
    
    }

    /*public function crearUpdate(Request $request, $empleado){
        $empleado->name = $request->name;
        $empleado->apellidos = $request->apellidos;
        $empleado->email = $request->email;
        $empleado->password = $request->password;
        $empleado->ci = $request->ci;
        $empleado->sexo = $request->sexo;
        $empleado->phone = $request->phone;
        $empleado->domicilio = $request->domicilio;
        $empleado->estado = $request->estado;
        $empleado->tipoc = $request->tipoc;
        $empleado->tipoe = $request->tipoe;
        $empleado->save();
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = User::where('id', '=', $id)->firstOrFail();
        $roles = Role::pluck('name', 'name')->all();
        $empRole = $empleado->roles->pluck('name', 'name')->all();
        return view('empleados.show', compact('empleado', 'roles', 'empRole'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = User::where('id', '=', $id)->firstOrFail();
        $roles = Role::pluck('name', 'name')->all();
        $empRole = $empleado->roles->pluck('name', 'name')->all();
        return view('empleados.edit', compact('empleado', 'roles', 'empRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        /*$empleado = User::where('id', '=', $id)->firstOrFail();
        $empleado = $this->crearUpdate($request, $empleado);*/
        $empleado = User::find($id);
        $empleado->update($request->validated());
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $empleado->assignRole($request->input('roles'));
        return redirect()->route('empleados.index')->with('message', 'Se ha actualizado los datos correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = User::findOrFail($id);
        try{
            $empleado->delete();
            return redirect()->route('empleados.index')->with('message', 'Se han borrado los datos correctamente.');
        }catch(QueryException $e){
            return redirect()->route('empleados.index')->with('danger', 'Datos relacionados con otras tablas, imposible borrar datos.');
        }
    }
}
