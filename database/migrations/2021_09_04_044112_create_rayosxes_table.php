<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRayosxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rayosxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('id_rx');
            $table->text('descripcion');
            $table->date('fecha realizada');
            $table->date('fecha entregada');
            $table->boolean('estado')->default(false);
            $table->integer('tamaño');
            $table->integer('cantidad');
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
        Schema::dropIfExists('rayosxes');
    }
}
