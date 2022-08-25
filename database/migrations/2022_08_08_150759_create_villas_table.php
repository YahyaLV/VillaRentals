<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('adresse');
            $table->integer('surface');
            $table->integer('nbrcouchage');
            $table->string('Parking');
            $table->string('Douche_extérieure');
            $table->string('Chauffage');
            $table->string('Piscine');
            $table->string('Barbecue');
            $table->string('Jardin_privatif');
            $table->string('Accès_internet');
            $table->integer('villa_type_id');
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
        Schema::dropIfExists('villas');
    }
}
