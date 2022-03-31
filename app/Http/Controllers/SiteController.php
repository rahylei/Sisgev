<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $cols = ['id', 'codigo', 'status'];
        $numc = '3';
        return view('piesas', compact('items', 'cols', 'numc'));
    }

    public function personal(){ 
        $items = '0';//User::all();
        $cols = ['id', 'name', 'status'];
        $numc = '3';
        return view('personal', compact('items', 'cols', 'numc'));
    }

    public function lineas(){ 
        $items = '1';//Linea::all();
        $cols = ['id', 'codigo','status'];
        $numc = '3';       
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

    public function storeLinea(Request $linea){

        $st;
        if($linea->status == 'activo'){
            $st = true;
        } else {
            $st = false;
        }

        $pieza_id = Str::before($linea->pieza, '.-');
        $user_id = Str::before($linea->user, '.-');


        $alta = new Linea();
        $alta->codigo = $linea->codigo;
        $alta->descripcion = $linea->descripcion;
        $alta->pieza_id = (int)$pieza_id;
        $alta->lider_id = (int)$user_id;
        $alta->status = $st;
        $alta->personal = 1;
        $alta->save();

        return redirect('/lineas');
    }

    public function editPieza($id){
        $pieza = Pieza::find($id);
        return view('editPieza', compact('pieza'));
    }

    public function updatePieza(Request $upPieza){

        $sts;
        if($upPieza->status == 1){
            $sts = true;
        } else {
            $sts = false;
        }

        Pieza::updateOrCreate(['id'=>$upPieza->id],
            [
                'codigo' => $upPieza->codigo,
                'descripcion' => $upPieza->descripcion,
                'almacen' => $upPieza->almacen,
                'status' => $sts,  
            ]);

        return redirect ('/piesaz');
    }

    public function deletePieza($id){
        $pieza = Pieza::find($id)->delete();            
        session()->flash('message', 'registro eliminado con exito...');
        return redirect ('/piesaz');
    }


    public function logout(Request $request){
    
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
