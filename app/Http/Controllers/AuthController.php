<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function signUp (Request $request){
        $item = new User();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->back();
    }
    public function signIn(Request $request){
        if (Auth::attempt(['email' => $request->name, 'password' => $request->password]) || Auth::attempt(['name' => $request->name, 'password' => $request->password]) ) {
            $request->session()->regenerate();
            return redirect()->route('view-manager');
        } else {
            return back()->withErrors([
                'error-auth' => 'El correo o la contraseña son incorrectos, vuelve a intentar'
            ]);
        }
    }
    public function signOut(){
        Auth::logout();
        Session::flush();
        return redirect()->route('view-home');
    }
}
