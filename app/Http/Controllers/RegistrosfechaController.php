<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registros_fecha;

class RegistrosFechaController extends Controller
{
    //
    public function getData (Request $request){
        $registros = registros_fecha::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $registros
        ]);
    }
    public function getDataById(request $request){
        $registros = registros_fecha::where('id',$request->id)->get;
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $registros
        ]);
    }
    public function update (Request $request){
        
        $registros=registros_fecha::findOrFail($request->id);

        $registros->update([
            "fechahora_entrada"=>$request->fechahora_entrada,
            "fechahora_salida"=>$request->fechahora_salida,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $registro=registros_fecha::create([
                "fechahora_entrada"=>$request->fechahora_entrada,
                "fechahora_salida"=>$request->fechahora_salida,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $registro,
        ]);


    }
    public function delete (Request $request){

        $registros= registros_fecha::findOrFail($request->id);
        $registros->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}