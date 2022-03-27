<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class PlantillaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plantillas')->insert([
        'puesto' => 'Operador',
        'turno' => 'indefinido',
        'user_id' => 3,    
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);
    }
}
