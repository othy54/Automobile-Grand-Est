<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->string('model');
            $table->string('version');
            $table->integer('door');
            $table->integer('power');
            $table->integer('distance');
            $table->float('price');
            $table->date('date');
            $table->enum('boite', ['Automatique', 'Semi-Automatique', 'Sequentielle', 'Manuelle']);
            $table->enum('fuel', ['Essence', 'Diesel', 'Electrique', 'Hybride']);
            $table->integer('place');
            $table->longText('option');
            $table->longText('description');
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
        Schema::dropIfExists('vehicles');
    }
}
