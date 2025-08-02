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
        DB::table('clientes')->insert([
            [
            'nombres'=>('Carlos'),
            'apellidos'=>('Caceres'),
            'direccion'=>('eterazama'),
            'celular'=>('68593618'),
            'nit'=>('9868903'),
            'created_at'=> now(),
            'updated_at'=> now(),

            ],
            [
                'nombres'=>('cristina'),
                'apellidos'=>('guzman'),
                'direccion'=>('villa tunari'),
                'celular'=>('68562829'),
                'nit'=>('6780235'),
                'created_at'=> now(),
                'updated_at'=> now(),
    
                ],
        ]
    );
    }
}
