<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\detalle_servicio;

class DetalleServicioController extends Controller
{
    //
    public function getData (Request $request){
        $detalle = detalle_servicio::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $detalle
        ]);
    }
    public function getDataById(request $request){
        $detalle = detalle_servicio::where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $detalle
        ]);
    }
    public function update (Request $request){
        
        $detalle=detalle_servicio::findOrFail($request->id);

        $detalle->update([
            "registronovedad_id"=>$request->registronovedad_id,
            "servicio_id"=>$request->servicio_id,
            "repuesto_id"=>$request->repuesto_id,
            "total"=>$request->total,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $detalle=detalle_servicio::create([
                "registronovedad_id"=>$request->registronovedad_id,
                "servicio_id"=>$request->servicio_id,
                "repuesto_id"=>$request->repuesto_id,
                "total"=>$request->total,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $detalle,
        ]);


    }
    public function delete (Request $request){

        $detalle= detalle_servicio::findOrFail($request->id);
        $detalle->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
