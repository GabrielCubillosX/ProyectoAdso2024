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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string("placa");

            $table->unsignedBigInteger("marca_registro_id");
            
            $table->foreign("marca_registro_id")->references("id")->on("modelos_autos");

            $table->unsignedBigInteger("propietario_id");
            
            $table->foreign("propietario_id")->references("id")->on("propietarios");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
