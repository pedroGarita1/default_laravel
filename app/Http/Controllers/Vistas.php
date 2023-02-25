<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function index(){
        $titulo = 'inicio';
        return view('inicio', compact('titulo'));
    }
}
