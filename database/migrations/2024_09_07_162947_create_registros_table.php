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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("vehiculo_id");
            
            $table->foreign("vehiculo_id")->references("id")->on("vehiculos");
//---------------------------------------------------------------------------------------
            $table->unsignedBigInteger("mecanico_id");
            
            $table->foreign("mecanico_id")->references("id")->on("mecanicos");
//-------------------------------------------------------------------------------------------

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
