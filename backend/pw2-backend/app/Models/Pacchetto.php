<?php

namespace App\Models;

use App\Models\Agenzia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacchetto extends Model
{
    protected $table = 'pacchetti';
    use HasFactory;
    public function agenzia()
    {
        return $this->belongsTo(Agenzia::class);
    }
}
