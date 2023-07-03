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
            'pacchetto_id' => '1',
        ]);
        Agenzia::create([
            'nome' => 'Buon Viaggio',
            'indirizzo' => 'via Dal Lavoro, 15, Riccione',
            'tel' => '0541555444',
            'pacchetto_id' => '5',
        ]);
        Agenzia::create([
            'nome' => 'Arcobaleno',
            'indirizzo' => 'via Lorenzo il Magnifico, 1600, Firenze',
            'tel' => '3383383389',
            'pacchetto_id' => '2',
        ]);
        Agenzia::create([
            'nome' => 'Arcobaleno',
            'indirizzo' => 'via Lorenzo il Magnifico, 1600, Firenze',
            'tel' => '3383383389',
            'pacchetto_id' => '6',
        ]);
        Agenzia::create([
            'nome' => 'Si Vacanze',
            'indirizzo' => 'viale Lavatoio, 72, Cesena ',
            'tel' => '3339555444',
            'pacchetto_id' => '3',
        ]);
        Agenzia::create([
            'nome' => 'Si Vacanze',
            'indirizzo' => 'viale Lavatoio, 72, Cesena ',
            'tel' => '3339555444',
            'pacchetto_id' => '4',
        ]);
        Agenzia::create([
            'nome' => 'Si Vacanze',
            'indirizzo' => 'viale Lavatoio, 72, Cesena ',
            'tel' => '3339555444',
            'pacchetto_id' => '8',
        ]);
        Agenzia::create([
            'nome' => 'Mare e Monti',
            'indirizzo' => 'largo Bonaparte, 72, Cattolica',
            'tel' => '0541555999',
            'pacchetto_id' => '7',
        ]);
    }
}
