<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTableAddPersonId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
        	$table->integer('person_id');
        	$table->foreign('person_id')->references('id')->on('people');
            $table->string('facebook_id');
            $table->string('google_id');
        }
    }

    public function down()
    {

    }
}