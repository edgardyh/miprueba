<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function fotos(){
        return view('fotos');
    }

    public function videos() {
        return view('videos');
    }

   public function recreacion($nombre=null){
    $equipo = ['Lucas', 'Marcos', 'Klark'];
    // Le idea es que podamos tomar cada item desde una consulta
    // Para el ex lo hacemos de forma estatica

    return view('recreacion', compact('equipo','nombre'));
   }

}
