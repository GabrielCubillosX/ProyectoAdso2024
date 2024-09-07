<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrosfechaController extends Controller
{
    //
    public function getData (Request $request){
        $rta=10+20;
        return response()->json([
            'status' => '200',
            'message' => 'data...',
            'result'=> $rta
        ]);
    }
    public function update (Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function save (Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }
    public function delete (Request $request){
        return response()->json([
            'status' => '200',
            'message' => 'guardado con exito',
        ]);
    }

}