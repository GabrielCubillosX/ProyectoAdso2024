<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\servicio;

class ServicioController extends Controller
{
    //
    public function getData (Request $request){
        $servicio = servicio::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $servicio
        ]);
    }
    public function update (Request $request){
        
        $servicio=servicio::findOrFail($request->id);

        $servicio->update([
            "nombre_servicio"=>$request->nombre_servicio,
            "precio_servicio"=>$request->precio_servicio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $servicio=servicio::create([
                "nombre_servicio"=>$request->nombre_servicio,
                "precio_servicio"=>$request->precio_servicio,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $servicio,
        ]);


    }
    public function delete (Request $request){

        $servicio= servicio::findOrFail($request->id);
        $servicio->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}