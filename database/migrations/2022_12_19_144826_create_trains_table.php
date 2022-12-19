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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_Partenza');
            $table->string('Stazione_Arrivo');
            $table->string('Orario_Partenza');
            $table->String('Orario_Arrivo');
            $table->integer('Codice_Treno');
            $table->integer('Num_Carrozze');
            $table->tinyInteger('In_Orario');
            $table->tinyInteger('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};
