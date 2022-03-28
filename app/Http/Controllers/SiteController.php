<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pieza;
use App\Models\Linea;
use App\Models\User;
use App\Models\Plantilla;


class SiteController extends Controller
{
    public function login(){
        return view();
    }

    public function piezas(){
        $items = '2';//Pieza::all();
        $cols = ['id', 'codigo', 'descripcion', '#-almacen', 'status'];
        $numc = '5';
        return view('piesas', compact('items', 'cols', 'numc'));
    }

    public function personal(){ 
        $items = '0';//User::all();
        $cols = ['id', 'name', 'rol', 'status'];
        $numc = '4';
        return view('personal', compact('items', 'cols', 'numc'));
    }

    public function lineas(){ 
        $items = '1';//Linea::all();
        $cols = ['id', 'codigo', 'descripcion', 'pieza_id', 'lider_id', 'status'];
        $numc = '6';       
        return view('lineas', compact('items', 'cols', 'numc'));
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
