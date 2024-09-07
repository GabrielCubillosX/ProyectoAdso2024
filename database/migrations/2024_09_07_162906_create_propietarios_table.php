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
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("cedula");
            $table->date("fecha_nacimiento");
            
            $table->unsignedBigInteger("contactos_id");
            
            $table->foreign("contactos_id")->references("id")->on("d_contactos");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propietarios');
    }
};
