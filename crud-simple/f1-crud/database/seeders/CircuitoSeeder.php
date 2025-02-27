<?php

namespace Database\Seeders;

use App\Models\Circuito;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CircuitoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cir = new Circuito();
        $cir->nombre_cir = 'Albert Park	';
        $cir->pais = 'Australia';
        $cir->ciudad = 'Melbourne';
        $cir->longitud_km = 306.1;
        $cir->vultas = 58;
        $cir->save();

        $cir = new Circuito();
        $cir->nombre_cir = 'Gilles Villeneuve';
        $cir->pais = 'Canadá';
        $cir->ciudad = 'Montreal';
        $cir->longitud_km = 305.3;
        $cir->vultas = 70;
        $cir->save();


        $cir = new Circuito();
        $cir->nombre_cir = 'Red Bull Ring';
        $cir->pais = 'Austria';
        $cir->ciudad = 'Estiria';
        $cir->longitud_km = 306.5;
        $cir->vultas = 71;
        $cir->save();

        $cir = new Circuito();
        $cir->nombre_cir = 'Jeddah Corniche Circuit';
        $cir->pais = 'Arabia Saudita';
        $cir->ciudad = 'Yeddah';
        $cir->longitud_km = 308.5;
        $cir->vultas = 50;
        $cir->save();


        $cir = new Circuito();
        $cir->nombre_cir = 'Circuito Urbano de Bakú';
        $cir->pais = 'Azerbaiyán';
        $cir->ciudad = 'Bakú';
        $cir->longitud_km = 306;
        $cir->vultas = 51;
        $cir->save();
        
    }
}
