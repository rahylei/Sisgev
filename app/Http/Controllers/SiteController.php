<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function login(){
        return view();
    }

    public function piezas(){
        return view('piesas');
    }

    public function personal(){
        return view('personal');
    }

    public function lineas(){
        return view('lineas');
    }

    public function calendar(){
        return view('calendar');
    }

    public function logout(Request $request){
    
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
