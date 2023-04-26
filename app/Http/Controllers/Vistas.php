<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Registry;

class Vistas extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest'])->only(['index']);
        $this->middleware(['guest'])->only(['index_auth']);
        $this->middleware(['auth'])->only(['index_manager']);
        $this->middleware(['auth'])->only(['view_create']);
    }
    public function index(){
        $titulo = 'Inicio';
        return view('inicio', compact('titulo'));
    }
    public function index_auth(){
        $titulo = 'Auth';
        return view('modules/auth/auth', compact('titulo'));
    }
    public function index_manager(){
        $titulo = 'Manager';
        $registro = Registros::where('id_users',Auth::user()->id)->get();
        $sum_registro = Registros::where('id_users',Auth::user()->id)->sum('ganancias');
        $res_registro = Registros::where('id_users',Auth::user()->id)->sum('gastos');
        if(isset($registro)){
            $validacion = 1;    
        }else{
            $validacion = 0;
        }
        return view('modules/manager/manager', compact('titulo','sum_registro','res_registro','validacion','registro'));
    }
    public function view_create(){
        $titulo = 'Crear registro';
        return view('modules/manager/create', compact('titulo'));
    }
}
