<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenzia;
class AgenzieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Agenzia::create([
            'nome' => 'Buon Viaggio',
            'indirizzo' => 'via Dal Lavoro, 15, Riccione',
            'tel' => '0541555444',
        ]);


        Agenzia::create([
            'nome' => 'Arcobaleno',
            'indirizzo' => 'via Lorenzo il Magnifico, 1600, Firenze',
            'tel' => '3383383389',
        ]);

        Agenzia::create([
            'nome' => 'Si Vacanze',
            'indirizzo' => 'viale Lavatoio, 42, Cesena',
            'tel' => '3339555444',
        ]);

        Agenzia::create([
            'nome' => 'Mare e Monti',
            'indirizzo' => 'largo Bonaparte, 72, Cattolica',
            'tel' => '0541555999',
        ]);
    }
}
