<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PiezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('piezas')->insert([
        'codigo' => '#1234567',
        'descripcion' => 'Este es un texto para poner en contexto y ya...',
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);
    }
}
