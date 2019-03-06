<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratoHasParticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contrato_has_participante', function(Blueprint $table)
		{
			$table->integer('Contrato_numContrato')->index('fk_Contrato_has_Participante_Contrato_idx');
			$table->integer('Participante_idParticipante')->unsigned()->index('fk_Contrato_has_Participante_Participante1_idx');
			$table->primary(['Contrato_numContrato','Participante_idParticipante']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contrato_has_participante');
	}

}
