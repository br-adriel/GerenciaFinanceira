<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespesasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('despesas', function (Blueprint $table) {
			$table->id();
			$table->timestamps();

			//$table->unsignedBigInteger('usuario');
			//$table->foreign('usuario')->references('id')->on('users')
			//->onDelete('cascade');

			$table->char('descricao', 50);
			$table->char('categoria', 20);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('despesas');
	}
}
