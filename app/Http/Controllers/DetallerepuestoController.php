<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detalle_repuesto;

class DetallerepuestoController extends Controller
{
    //
    public function getData (Request $request){
        $detalle = detalle_repuesto::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $detalle
        ]);
    }
    public function update (Request $request){
        
        $detalle=detalle_repuesto::findOrFail($request->id);

        $detalle->update([
            "modeloauto_repuesto"=>$request->modeloauto_repuesto,
            "marcaproveedor"=>$request->marcaproveedor,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $detalle=detalle_repuesto::create([
                "modeloauto_repuesto"=>$request->modeloauto_repuesto,
                "marcaproveedor"=>$request->marcaproveedor,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $detalle,
        ]);


    }
    public function delete (Request $request){

        $detalle= detalle_repuesto::findOrFail($request->id);
        $detalle->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}