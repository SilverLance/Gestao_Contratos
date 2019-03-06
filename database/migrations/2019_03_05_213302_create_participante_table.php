<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('participante', function(Blueprint $table)
		{
			$table->integer('idParticipante')->unsigned()->primary();
			$table->string('nome', 100);
			$table->integer('matricula')->unsigned();
			$table->string('cpf', 11);
			$table->string('rg', 10);
			$table->string('setor', 45)->nullable();
			$table->string('cargo', 45)->nullable();
			$table->string('funcao', 45)->nullable();
			$table->string('tipo', 45)->nullable();
			$table->string('login', 45);
			$table->string('senha', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('participante');
	}

}
