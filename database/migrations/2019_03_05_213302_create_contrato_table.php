<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato', function(Blueprint $table)
		{
			$table->integer('numContrato')->unique('numContrato_UNIQUE');
			$table->string('Objeto_contrato', 45);
			$table->dateTime('data_inicio');
			$table->dateTime('data_fim');
			$table->integer('num_ano');
			$table->string('modalidade', 45);
			$table->binary('documentos', 16777215)->nullable();
			$table->string('links', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contrato');
	}

}
