<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $equip = new Equipo();
        $equip->nombre_equipo = 'Oracle Red Bull Racing';
        $equip->director = 'Christian Horner';
        $equip->fundacion = 2005;
        $equip->save();

        $equip = new Equipo();
        $equip->nombre_equipo = 'Mercedes-AMG Petronas Formula One Team';
        $equip->director = 'Toto Wolff';
        $equip->fundacion = 1954;
        $equip->save();

        $equip = new Equipo();
        $equip->nombre_equipo = 'Scuderia Ferrari';
        $equip->director = 'Frédéric Vasseur';
        $equip->fundacion = 1950;
        $equip->save();

        $equip = new Equipo();
        $equip->nombre_equipo = 'McLaren F1 Team';
        $equip->director = 'Andrea Stella';
        $equip->fundacion = 1963;
        $equip->save();

        $equip = new Equipo();
        $equip->nombre_equipo = 'Williams Racing';
        $equip->director = 'James Vowles';
        $equip->fundacion = 1977;
        $equip->save();
    }
}
