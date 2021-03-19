<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefonos', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->unsignedBigInteger('tipo_id')->nullable();

            $table->foreign('persona_id')->references('id')->on('personas')
            ->onDelete('set null');
            $table->foreign('tipo_id')->references('id')->on('tipos')
            ->onDelete('set null');
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
        Schema::dropIfExists('telefonos');
    }
}
