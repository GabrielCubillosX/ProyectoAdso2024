<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registro;


class RegistroController extends Controller
{
    //
    public function getData (Request $request){
        $registro = registro::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $registro
        ]);
    }
    public function update (Request $request){
        
        $registro=registro::findOrFail($request->id);

        $registro->update([
            "vehiculo_id"=>$request->vehiculo_id,
            "mecanico_id"=>$request->mecanico_id,
            "registrosalidas_id"=>$request->registrosalidas_id,
            "total"=>$request->total,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $registro=registro::create([
                "vehiculo_id"=>$request->vehiculo_id,
                "mecanico_id"=>$request->mecanico_id,
                "registrosalidas_id"=>$request->registrosalidas_id,
                "total"=>$request->total,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $registro,
        ]);


    }
    public function delete (Request $request){

        $registro= registro::findOrFail($request->id);
        $registro->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
