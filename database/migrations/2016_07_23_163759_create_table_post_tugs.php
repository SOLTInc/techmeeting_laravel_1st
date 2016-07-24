<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePostTugs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post_tugs', function(Blueprint $table)
      {
        $table->increments('id');
        $table->integer('post_id');
        $table->string('tug_name');
        $table->timestamps(); 
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('post_tugs');
    }
}
