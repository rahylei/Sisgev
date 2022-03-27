<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lineas')->insert([
        'codigo' => '#1234567',
        'descripcion' => 'descripcion de la linea...',
        'pieza_id' => 1,
        'lider_id' => 2,
        'personal' => 1,     
        'status' => true,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);
    }
}
