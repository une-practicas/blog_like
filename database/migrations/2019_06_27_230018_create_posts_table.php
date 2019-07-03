<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            //id
            $table->bigIncrements('id');
            // titulo
            $table->string('title');
            // fecha creación
            $table->timestamps();
            // contenido
            $table->mediumText("content");
            //likes
            $table->integer("likes");
            // image
            $table->text("img_src");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
