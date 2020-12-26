<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receitas', function (Blueprint $table) {
			$table->id();
			$table->timestamps();

			//$table->unsignedBigInteger('usuario');
			//$table->foreign('usuario')->references('id')->on('users')
			//->onDelete('cascade');

			$table->char('descricao', 50);
			$table->boolean('fixa')->default(0);
			$table->decimal('valor', $precision=10, $scale=2);
			$table->date('data');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('receitas');
	}
}
