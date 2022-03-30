<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pieza;
use App\Models\Linea;
use App\Models\User;
use App\Models\Plantilla;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



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
        $cols = ['id', 'name', 'role', 'status'];
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

    public function forms(){
        return view('formulario');
    }

    public function storePieza(Request $pieza){
        $alta = new Pieza();
        $alta->codigo = $pieza->codigo;
        $alta->descripcion = $pieza->descripcion;
        $alta->save();

        return redirect('/piesaz');
    }

    public function forms2(){
        return view('formulario2');
    }

    public function storePersonal(Request $user){

        $sb = false;
        
        if($user->status == 'activo'){
            $sb = true;
        } else {
            $sb = false;
        }

        DB::table('users')->insert([
        'name' => $user->nombre,
        'email' => 'Default@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'role' => $user->rol,
        'status' => $sb,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);

        return redirect('/personal');
    }


    public function forms3(){
        return view('formulario3');
    }

    public function logout(Request $request){
    
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
