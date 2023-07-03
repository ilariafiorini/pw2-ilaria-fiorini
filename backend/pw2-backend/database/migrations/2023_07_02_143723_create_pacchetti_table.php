<?php

use App\Models\Agenzia;
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
        Schema::create('pacchetti', function (Blueprint $table) {
            $table->id();
            $table->string('destinazione');
            $table->integer('durata');
            $table->integer('prezzo');
            $table->foreignIdFor(Agenzia::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacchetti');
    }
};
