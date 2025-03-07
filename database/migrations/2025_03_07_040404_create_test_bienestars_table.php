<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('test_bienestars', function (Blueprint $table) {
            $table->id();
            $table->integer('peso');
            $table->integer('altura');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('complexion');
            $table->string('actividad');
            $table->string('suenio');
            $table->string('estres');
            $table->string('objetivo');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('test_bienestars');
    }
};

