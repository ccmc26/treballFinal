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
        Schema::create('direccioncliente', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('adress');
            $table->string('city');
            $table->string('provincia');
            $table->string('zipcode');
            $table->string('country_code');
            $table->foreignId('customer_id')->references('id')->on('cliente');
            $table->timestamps();
            $table->foreign('country_code')->references('code')->on('pais');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccioncliente');
    }
};
