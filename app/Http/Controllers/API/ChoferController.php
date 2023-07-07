<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Camion;
use App\Models\EquipoRecorrido;
use App\Traits\ApiResponder;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreEquipoRecorridoRequest;

class ChoferController extends Controller
{

    use ApiResponder;
    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function listaEmpleados()
    {


        $empleados = User::select("id", "image", "name", "apellidos", "ci", "phone")->whereHas("roles", function ($q) {
            $q->whereIn("name", ["Ayudante", "Recogedor"]);
        })->get();

        $empleadosConRoles = $empleados->map(function ($empleado) {
            $nombresRoles = $empleado->roles->pluck('name');
            $empleado->roles = $nombresRoles;
            return $empleado;
        });

        return $this->success(
            "empleados",
            $empleadosConRoles
        );
    }

    public function listarCamiones()
    {
        return Camion::all();
    }

    /* public function registrarEquipoDeRecorrido(Request $request)
    {
        $id_empleado = $request->id_empleado;

        if (is_array($id_empleado) && count($id_empleado) > 0) {

            foreach ($id_empleado as $id_empleados) {
                $equipo = new EquipoRecorrido(['id_empleado' => $id_empleados]);
                $equipo->id_camion = $request->id_camion;
                $equipo->save();
            }
        } else {
            $equipo = new EquipoRecorrido(['id_empleado' => $request->id_empleado]);
            $equipo->id_camion = $request->id_camion;
            $equipo->save();
        }


        return $this->success(__("Registrado"), "Guardado");
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEquipoRecorridoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function registrarEquipoDeRecorrido(StoreEquipoRecorridoRequest $request)
    {
        $empleados = $request->id_empleado;
        $ultimoId = EquipoRecorrido::max('id');
        if ($ultimoId == null) {
            // si el primero en ingresar es un array
            if (is_array($empleados) && count($empleados) > 0) {
                foreach ($empleados as $empleado) {
                    EquipoRecorrido::create([
                        'id' => '1',
                        'id_empleado' => $empleado,
                        'id_camion' => $request->id_camion,
                    ]);
                }
                return $this->success("registrado", [
                    "id" => 1,
                ]);
            } else {
                // si el primero en ingresar no es un array
                EquipoRecorrido::create([
                    'id' => '1',
                    'id_empleado' => $empleados,
                    'id_camion' => $request->id_camion,
                ]);
                return $this->success("registrado", [
                    "id" => 1,
                ]);
            }
        } else {
            // en caso de que  no sea el primero y no sea un array
            if (!is_array($empleados)) {
                EquipoRecorrido::create([
                    'id' => $ultimoId + 1,
                    'id_empleado' =>  $empleados,
                    'id_camion' => $request->id_camion,
                ]);
            }



            // en el caso de que no sea el primero y sea un array
            if (is_array($empleados) && count($empleados) > 0) {
                foreach ($empleados as $empleado) {
                    EquipoRecorrido::create([
                        'id' => $ultimoId + 1,
                        'id_empleado' => $empleado,
                        'id_camion' => $request->id_camion,
                    ]);
                }
            }

            return  $this->success("registrado", [
                "id" => $ultimoId + 1,
            ]);
        }
    }


    public function obtenerRutaDeCamnionero()
    {
    }
}
