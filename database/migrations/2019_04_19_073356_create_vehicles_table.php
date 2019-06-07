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
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('version')->nullable();
            $table->integer('door')->nullable();
            $table->integer('power')->nullable();
            $table->integer('distance')->nullable();
            $table->float('price')->nullable();
            $table->date('date')->nullable();
            $table->enum('boite', ['Automatique', 'Semi-Automatique', 'Sequentielle', 'Manuelle'])->nullable();
            $table->enum('fuel', ['Essence', 'Diesel', 'Electrique', 'Hybride'])->nullable();
            $table->integer('place')->nullable();
            $table->string('description')->nullable();
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
