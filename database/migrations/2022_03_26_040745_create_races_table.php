<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('external_id');
            $table->string('name');
            $table->unsignedBigInteger('meeting_id');
            $table->timestamps();

            $table->foreign('meeting_id')->references('id')->on('meetings')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('races');
    }
}
