<?php

namespace App\Http\Controllers;

use App\Models\Registros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrosController extends Controller
{
    public function store (Request $request){
        $registro = new Registros();
        $registro->name_register = $request->name_register;
        $registro->estado_registro = $request->estado_registro;
        if($request->estado_registro == 'Ganancia')
            $registro->ganancias = $request->ingreso;
        if($request->estado_registro == 'Gasto')
            $registro->gastos = $request->ingreso;
        $registro->id_users = Auth::user()->id;
        $registro->save();
        return redirect()->route('view-manager');
    }
    public function edit($id){
        $registro = Registros::find($id);
        $titulo = 'Editar Registro';
        return view('modules/manager/edit', compact('titulo','registro'));
    }
    public function update(Request $request, $id){
        $registro = Registros::find($id);
        $registro->name_register = $request->name_register;
        $registro->estado_registro = $request->estado_registro;
        if($request->estado_registro == 'Ganancia')
            $registro->ganancias = $request->ingreso;
        if($request->estado_registro == 'Gasto')
            $registro->gastos = $request->ingreso;
        $registro->save();
        return redirect()->route('view-manager');
    }
    public function delete($id){
        $registro = Registros::find($id);
        $registro->delete();
        return redirect()->route('view-manager');
    }
}
