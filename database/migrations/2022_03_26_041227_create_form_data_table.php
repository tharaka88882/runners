<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->String('sex')->nullable();
            $table->String('color')->nullable();
            $table->String('age')->nullable();
            $table->String('owner')->nullable();
            $table->String('career')->nullable();
            $table->String('_1st_up')->nullable();
            $table->String('_2nd_up')->nullable();
            $table->String('_3rd_up')->nullable();
            $table->String('_4th_up')->nullable();
            $table->String('track')->nullable();
            $table->String('distance')->nullable();
            $table->String('Trk_dist')->nullable();
            $table->String('firm')->nullable();
            $table->String('good')->nullable();
            $table->String('sort')->nullable();
            $table->String('heavy')->nullable();
            $table->String('synthetic')->nullable();
            $table->String('night')->nullable();

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
        Schema::dropIfExists('form_data');
    }
}
