<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecografias', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('id_ecogrifia');
            $table->date('fecha_realizada');
            $table->date('fecha_entregada');
            $table->text('descripcion');
            $table->boolean('estado')->default(false);
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
        Schema::dropIfExists('ecografias');
    }
}
