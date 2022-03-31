<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        'nombre' => 'Administrador',
        'email' => 'AdminDefault@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'role' => 'Administrador',
        'status' => true,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);

        DB::table('users')->insert([
        'name' => 'Lider',
        'email' => 'Lider@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),
        'role' => 'Lider',
        'status' => true,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);

        DB::table('users')->insert([
        'name' => 'Operador',
        'email' => 'Operador@gmail.com',
        'email_verified_at' => Carbon::now(),
        'password' => Hash::make('12345678'),        
        'status' => true,
        'created_at' => Carbon::now(),
        'updated_at'=> Carbon::now(),
        ]);
    }
}
