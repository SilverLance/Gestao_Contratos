<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToContratoHasParticipanteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contrato_has_participante', function(Blueprint $table)
		{
			$table->foreign('Contrato_numContrato', 'fk_Contrato_has_Participante_Contrato')->references('numContrato')->on('contrato')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Participante_idParticipante', 'fk_Contrato_has_Participante_Participante1')->references('idParticipante')->on('participante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contrato_has_participante', function(Blueprint $table)
		{
			$table->dropForeign('fk_Contrato_has_Participante_Contrato');
			$table->dropForeign('fk_Contrato_has_Participante_Participante1');
		});
	}

}
