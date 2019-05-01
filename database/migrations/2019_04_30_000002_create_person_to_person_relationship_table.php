<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonToPersonRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_to_person_relationship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('initiating_person_id');
            $table->integer('relation_person_id');
            $table->string('relationship');
            $table->boolean('relation_person_approval');
            $table->foreign('initiating_person_id')->references('id')->on('people');
            $table->foreign('relation_person_id')->references('id')->on('people');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_to_person_relationship');
    }
}
