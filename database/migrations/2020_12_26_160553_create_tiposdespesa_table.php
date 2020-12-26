<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposdespesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposdespesa', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('despesa');
            $table->foreign('despesa')->references('id')->on('despesas')
            ->onDelete('cascade');

            $table->char('descricao', 50);
            $table->boolean('fixa')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiposdespesa');
    }
}
