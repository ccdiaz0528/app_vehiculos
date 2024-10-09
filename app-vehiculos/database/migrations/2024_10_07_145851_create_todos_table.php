<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Este metodo me permite realizar la migracion.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('marca');
            $table->string('placa')->unique();
            $table->string('color');
            $table->integer('modelo');
            $table->date('fecha_de_compra');
            $table->tinyInteger('accidente');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
