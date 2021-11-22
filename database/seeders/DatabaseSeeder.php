<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\Producto;
use App\Models\Asuntos;
use App\Models\Cliente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            Producto::factory(8)->sequence(
            ['producto_nombre'=>'Champú y jabón anti-pulgas'],
            ['producto_nombre'=>'Cepillos'],
            ['producto_nombre'=>'Esponjas'],
            ['producto_nombre'=>'Corta uñas'],
            ['producto_nombre'=>' Camas y tapetes'],
            ['producto_nombre'=>'Juguetes '],
            ['producto_nombre'=>'Collares'],
            ['producto_nombre'=>'Correas '],
            )->create();

            Asuntos::factory(8)->sequence(
            ['asunto_nombre'=>'Internación'],
            ['asunto_nombre'=>'Cirugía'],
            ['asunto_nombre'=>'Ecografía'],
            ['asunto_nombre'=>'Baño y Peluquería'],
            ['asunto_nombre'=>'Guardería'],
            ['asunto_nombre'=>'Odontología'],
            ['asunto_nombre'=>'Análisis'],
            ['asunto_nombre'=>'Vacuna'],
            )->create();

            Cliente::factory(8)->sequence(
            ['cliente_direccion'=>'Jr. Abtao'],
            ['cliente_direccion'=>'Jr. Ayacucho'],
            ['cliente_direccion'=>'Jr. Tarapaca'],
            ['cliente_direccion'=>'Jr. 28 de Julio'],
            ['cliente_direccion'=>'Jr. 2 de Mayo'],
            ['cliente_direccion'=>'Jr. Huánuco'],
            ['cliente_direccion'=>'Jr. Mayro'],
            ['cliente_direccion'=>'Jr. Junin'],
            )->create();
    }
}
