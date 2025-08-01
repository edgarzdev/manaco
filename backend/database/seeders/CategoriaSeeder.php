<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar categoria
        DB::table('categorias')->insert([
            [
                'nombre' => 'Calzados de varon',
                'descripcion' => 'Descripcion de calzados de varon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'Calzados de dama',
                'descripcion' => 'Descripcion de calzados de dama',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
