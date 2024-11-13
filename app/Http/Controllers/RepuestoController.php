<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\repuesto;


class RepuestoController extends Controller
{
    //
    public function getData (Request $request){
        $repuesto = repuesto::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $repuesto
        ]);
    }
    public function getDataById(request $request){
        $repuesto = repuesto::where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $repuesto
        ]);
    }
    public function update (Request $request){
        
        $repuesto=repuesto::findOrFail($request->id);

        $repuesto->update([
            "nombre"=>$request->nombre,
            "registrodetalles_id"=>$request->registrodetalles_id,
            "precio"=>$request->precio,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $repuesto=repuesto::create([
                "nombre"=>$request->nombre,
                "registrodetalles_id"=>$request->registrodetalles_id,
                "precio"=>$request->precio,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $repuesto,
        ]);


    }
    public function delete (Request $request){

        $repuesto= repuesto::findOrFail($request->id);
        $repuesto->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
