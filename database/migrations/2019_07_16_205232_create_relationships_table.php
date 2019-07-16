<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relationships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user1_id');
            $table->foreign('user1_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user2_id');
            $table->foreign('user2_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('follow');
            $table->boolean('friend');
            $table->boolean('block');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
