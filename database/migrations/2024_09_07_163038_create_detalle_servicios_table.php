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
        Schema::create('detalle_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("registronovedad_id");
            
            $table->foreign("registronovedad_id")->references("id")->on("registros");
            //----------------------------------------------
            $table->unsignedBigInteger("servicio_id");
            
            $table->foreign("servicio_id")->references("id")->on("servicios");
            //--------------------------------------
            $table->unsignedBigInteger("repuesto_id");
            
            $table->foreign("repuesto_id")->references("id")->on("repuestos");
            //-----------------------------------------------------
            
            $table->unsignedBigInteger("total");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_servicios');
    }
};
