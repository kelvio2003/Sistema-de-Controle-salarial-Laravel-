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
        Schema::create('intensivos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('valor_pago');
            $table->string('turno');
            $table->string('sexo');
            $table->integer('telefone');
            $table->date('data');
            $table->string('curso');
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
        Schema::dropIfExists('intensivos');
    }
};
