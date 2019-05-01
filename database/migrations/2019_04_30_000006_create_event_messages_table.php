<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject');
            $table->text('body');
            $table->integer('person_id')->nullable();
            $table->integer('event_id')->nullable();
            $table->integer('reply_message')->nullable();
            $table->foreign('person_id')->references('id')->on('people');
            $table->foreign('event_id')->references('id')->on('events');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_messages');
    }
}
