<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propietario;


class PropietarioController extends Controller
{
    //
    public function getData (Request $request){
        $propietario = propietario::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $propietario
        ]);
    }
    public function getDataById(request $request){
        $propietario = propietario::where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $propietario
        ]);
    }
    public function update (Request $request){
        
        $propietario=propietario::findOrFail($request->id);

        $propietario->update([
            "nombres"=>$request->nombres,
            "apellidos"=>$request->apellidos,
            "cedula"=>$request->cedula,
            "fecha_nacimiento"=>$request->fecha_nacimiento,
            "contactos_id"=>$request->contactos_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $propietario=propietario::create([
                "nombres"=>$request->nombres,
                "apellidos"=>$request->apellidos,
                "cedula"=>$request->cedula,
                "fecha_nacimiento"=>$request->fecha_nacimiento,
                "contactos_id"=>$request->contactos_id,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $propietario,
        ]);


    }
    public function delete (Request $request){

        $propietario= propietario::findOrFail($request->id);
        $propietario->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
