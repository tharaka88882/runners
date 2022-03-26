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
            $table->String('career');
            $table->String('1st_up');
            $table->String('2nd_up');
            $table->String('3rd_up');
            $table->String('4th_up');
            $table->String('track');
            $table->String('distance');
            $table->String('Trk_dist');
            $table->String('firm');
            $table->String('good');
            $table->String('sort');
            $table->String('heavy');
            $table->String('synthetic');
            $table->String('night');
            
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
