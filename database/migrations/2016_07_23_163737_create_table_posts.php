<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function(Blueprint $table)
      {
        $table->increments('id');
        $table->string('title');
        $table->string('category');
        $table->text('description');
        $table->string('picture');
        $table->softDeletes();
        $table->timestamps(); // created_atとupdate_atカラムの追加
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
