<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\d_contacto;

class DContactoController extends Controller
{
    //
    public function getData (Request $request){
        $contactos = d_contacto::all();
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $contactos
        ]);
    }
    public function getDataById(Request $request){
        $contactos = d_contacto::where('id', $request->id)->get();
        return response()->json([
            'status'=> '200',
            'message'=> 'data ...',
            'result' => $contactos
        ]);
    }
    public function update (Request $request){
        
        $contactos=d_contacto::findOrFail($request->id);

        $contactos->update([
            "telefono"=>$request->telefono,
            "email"=>$request->email,
        ]);

        return response()->json([
            'status' => '200',
            'message' => 'actualizado con exito',
        ]);
    }
    public function save (Request $request){
        
            $contacto=d_contacto::create([
                "telefono"=>$request->telefono,
                "email"=>$request->email,
            ]);

        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
            "data" => $contacto,
        ]);


    }
    public function delete (Request $request){

        $contactos= d_contacto::findOrFail($request->id);
        $contactos->delete();
        return response()->json([
            'status' => '200',
            'message' => 'eliminado con exito',
        ]);
    }

}
/* Gabriel Cubillos */