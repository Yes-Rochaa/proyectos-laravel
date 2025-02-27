<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Carrera();
        $car->name_carre = 'Gran Premio de Azerbaijan';
        $car->fecha = '2024-09-13';
        $car->temporada = 2024;
        $car->circuito_id = "5";
        $car->save();

        $car = new Carrera();
        $car->name_carre = 'Gran Premio de Austria';
        $car->fecha = '2024-06-28';
        $car->temporada = 2024;
        $car->circuito_id = "3";
        $car->save();

        $car = new Carrera();
        $car->name_carre = 'Gran Premio de Arabia Saudí';
        $car->fecha = '2024-03-07	';
        $car->temporada = 2024;
        $car->circuito_id = "4";
        $car->save();
    }
}
