<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->text('comentario');            
            $table->unsignedBigInteger('cancion_id');
            $table->unsignedBigInteger('artista_id');
            $table->timestamps();
            // Agregamos la clave foránea para la relación con producto
            $table->foreign('cancion_id')->references('id')->on('cancions')->onDelete('cascade');
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }

};
