<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrutasController extends Controller
{
    //Accion que devuelva una Vista
    public function getIndex(){
      return view('frutas.index')
                ->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));
    }

    public function getNaranjas(){
      return 'Acción de NARANJAS';
    }

    public function anyPeras(){
      return 'Acción de PERAS';
    }

    public function recibirFormulario(Request $request){
      $data = $request;

      /*var_dump($request);
      die();*/

      //return 'El nombre de la fruta es: '.$data['nombre'];
      return 'El nombre de la fruta es: '.$request->input('nombre');
    }
}
