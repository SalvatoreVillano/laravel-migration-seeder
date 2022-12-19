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
            $table->string('azienda');
            $table->text('stazione_partenza');
            $table->text('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->integer('codice_treno');
            $table->integer('num_carrozze');
            $table->tinyInteger('in_orario');
            $table->tinyInteger('cancellato');
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
