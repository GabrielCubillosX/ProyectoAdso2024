<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehiculo;


class VehiculoController extends Controller
{
    //
    public function getData (Request $request){
        $vehiculo = vehiculo::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $vehiculo
        ]);
    }
    public function getDataById(request $request){
        $vehiculo = vehiculo::where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $vehiculo
        ]);
    }
    public function update (Request $request){
        
        $vehiculo=vehiculo::findOrFail($request->id);

        $vehiculo->update([
            "placa"=>$request->placa,
            "marca_registro_id"=>$request->marca_registro_id,
            "propietario_id"=>$request->propietario_id,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $vehiculo=vehiculo::create([
                "placa"=>$request->placa,
                "marca_registro_id"=>$request->marca_registro_id,
                "propietario_id"=>$request->propietario_id,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $vehiculo,
        ]);


    }
    public function delete (Request $request){

        $vehiculo= vehiculo::findOrFail($request->id);
        $vehiculo->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
