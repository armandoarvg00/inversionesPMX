<?php

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
        Schema::create('user_metodopago', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',500);
            $table->string('cuenta',500);
            $table->string('mes',500);
            $table->string('anio',500);
            $table->string('expiracion',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_metodopago');
    }
};
