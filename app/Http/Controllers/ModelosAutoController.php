<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\modelos_auto;

class ModelosAutoController extends Controller
{
    //
    public function getData (Request $request){
        
        
        $modelosAutos=modelos_auto::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $modelosAutos
        ]);
    }
    public function update (Request $request){
        $modelo=modelos_auto::findOrFail($request->id);

        $modelo->update([
            "marca"=>$request->marca,
            "modelo"=>$request->modelo,
            "modelo_year"=>$request->modelo_year,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        $modeloAuto= modelos_auto::create([
            "marca"=>$request->marca,
            "modelo"=>$request->modelo,
            "modelo_year"=>$request->modelo_year,
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data"=>$modeloAuto
        ]);
    }
    public function delete (Request $request){
        $modelo= modelos_auto::findOrFail($request->id);
        $modelo->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}