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
        Schema::create('informacion_frutas', function (Blueprint $table) {
            $table->id();

            $table->string('fruta');
            $table->string('imagen');
            $table->text('descripcion');
            $table->text('clasificacion');
            $table->text('peso_promedio');
            $table->text('color');
            $table->text('usos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacion_frutas');
    }
};
