<?php

use App\Models\Pacchetto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agenzie', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('indirizzo');
            $table->string('tel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenzie');
    }
};
