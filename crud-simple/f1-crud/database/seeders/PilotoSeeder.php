<?php

namespace Database\Seeders;

use App\Models\Piloto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Max';
        $pilot->apellido = 'Verstappen';
        $pilot->nacimiento = '1997-09-30';
        $pilot->nacionalidad = 'Belga';
        $pilot->n_coche = 1;
        $pilot->equipo_id = "1";
        $pilot->save();

        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Sergio';
        $pilot->apellido = 'Perez';
        $pilot->nacimiento = '1990-01-26';
        $pilot->nacionalidad = 'Méxicano';
        $pilot->n_coche = 11;
        $pilot->equipo_id = "1";
        $pilot->save();

        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Lewis';
        $pilot->apellido = 'Hamilton';
        $pilot->nacimiento = '1985-01-07';
        $pilot->nacionalidad = 'Británico';
        $pilot->n_coche = 44;
        $pilot->equipo_id = "2";
        $pilot->save();

        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Carlos';
        $pilot->apellido = 'Sainz';
        $pilot->nacimiento = '1994-09-01';
        $pilot->nacionalidad = 'Española';
        $pilot->n_coche = 55;
        $pilot->equipo_id = "3";
        $pilot->save();

        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Landon';
        $pilot->apellido = 'Norris';
        $pilot->nacimiento = '1999-11-13';
        $pilot->nacionalidad = 'Británico';
        $pilot->n_coche = 4;
        $pilot->equipo_id = "4";
        $pilot->save();


        $pilot = new Piloto();
        $pilot->nombre_pilot = 'Logan';
        $pilot->apellido = 'Sargeant';
        $pilot->nacimiento = '2001-12-31';
        $pilot->nacionalidad = 'Estanudinense';
        $pilot->n_coche = 2;
        $pilot->equipo_id = "5";
        $pilot->save();
        
    }
}
