<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('horas_id');
            $table->foreign('horas_id')->references('id')->on('horas')->onDelete('cascade');

            $table->unsignedBigInteger('dias_id');
            $table->foreign('dias_id')->references('id')->on('dias')->onDelete('cascade');
            
            $table->unsignedBigInteger('peliculas_id');
            $table->foreign('peliculas_id')->references('id')->on('peliculas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
