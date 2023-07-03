<?php

namespace App\Models;

use App\Models\Pacchetto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenzia extends Model
{
    protected $table = 'agenzie';

    public function pacchetti()
    {
        return $this->hasMany(Pacchetto::class);
    }

    use HasFactory;
}
