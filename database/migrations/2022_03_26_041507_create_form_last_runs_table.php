<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormLastRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_last_runs', function (Blueprint $table) {
            $table->id();
            //$string->
            $table->unsignedBigInteger('runner_id');
            $table->timestamps();

            $table->foreign('runner_id')->references('id')->on('runners')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_last_runs');
    }
}
