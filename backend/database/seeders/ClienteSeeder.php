<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombres'   => 'Juan',
                'apellidos' => 'Pérez',
                'direccion' => 'Calle Falsa 123',
                'celular'   => '77712345',
                'nit'       => '123456789',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombres'   => 'María',
                'apellidos' => 'Gonzales',
                'direccion' => 'Av. Principal 456',
                'celular'   => '78945612',
                'nit'       => '987654321',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
    }
}
