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
        Schema::create('cancions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('album');
            $table->unsignedBigInteger('artista_id');
            $table->decimal('precio', 10, 2);
            $table->integer('stock');
            $table->timestamps();
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('cancions');
    }

};
