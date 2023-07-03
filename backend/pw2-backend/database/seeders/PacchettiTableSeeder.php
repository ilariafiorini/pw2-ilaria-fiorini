<?php

namespace Database\Seeders;

use App\Models\Pacchetto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PacchettiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pacchetto::create([
            'destinazione' => 'Cattolica',
            'durata' => 5,
            'prezzo' => 350,
            'agenzia_id' => 4,
        ]);
        Pacchetto::create([
            'destinazione' => 'Londra',
            'durata' => 9,
            'prezzo' => 2550,
            'agenzia_id' => 3,
        ]);
        Pacchetto::create([
            'destinazione' => 'Milano',
            'durata' => 5,
            'prezzo' => 1000,
            'agenzia_id' => 2,
        ]);
        Pacchetto::create([
            'destinazione' => 'Roma',
            'durata' => 8,
            'prezzo' => 1000,
            'agenzia_id' => 1,
        ]);
        Pacchetto::create([
            'destinazione' => 'Venezia',
            'durata' => 5,
            'prezzo' => 2500,
            'agenzia_id' => 2,
        ]);
        Pacchetto::create([
            'destinazione' => 'Forlì',
            'durata' => 3,
            'prezzo' => 200,
            'agenzia_id' => 3,
        ]);
        Pacchetto::create([
            'destinazione' => 'Palermo',
            'durata' => 4,
            'prezzo' => 950,
            'agenzia_id' => 1,
        ]);

    }
}
