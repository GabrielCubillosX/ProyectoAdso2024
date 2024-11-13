<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mecanico;

class MecanicoController extends Controller
{
    //
    public function getData (Request $request){
        $mecanico = mecanico::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $mecanico
        ]);
    }
    public function getDataById(request $request){
        $mecanico = mecanico::where('id',$request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $mecanico
        ]);
    }
    public function update (Request $request){
        
        $mecanico=mecanico::findOrFail($request->id);

        $mecanico->update([
            "nombres"=>$request->nombres,
            "apellidos"=>$request->apellidos,
            "telefono"=>$request->telefono,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $registro=mecanico::create([
            "nombres"=>$request->nombres,
            "apellidos"=>$request->apellidos,
            "telefono"=>$request->telefono,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $registro,
        ]);


    }
    public function delete (Request $request){

        $mecanico= mecanico::findOrFail($request->id);
        $mecanico->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}