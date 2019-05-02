<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestedRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggested_relationships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('first_person_id');
            $table->integer('second_person_id');
            $table->string('reason');
            $table->foreign('first_person_id')->references('id')->on('people');
            $table->foreign('second_person_id')->references('id')->on('people');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggested_relationships');
    }
}
