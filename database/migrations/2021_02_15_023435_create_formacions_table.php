<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->string('descripcion', 500);
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->string('ubicacion', 200);
            $table->string('departamento', 200);
            $table->string('municipio', 200);
            $table->integer('horas_curso');
            $table->string('modalidad', 200);
            $table->string('tipo_costo', 200);
            $table->double('costo');
            $table->integer('n_participantes');
            $table->integer('cant_evaluaciones');
            $table->integer('contrato');
            $table->integer('orden_compra');
            $table->integer('compra_bolsa');
            $table->integer('item');
            $table->string('programa', 200);
            $table->string('facilitador', 200);
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
        Schema::dropIfExists('formacions');
    }
}
