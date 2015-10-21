<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("link_id");
            $table->integer("user_id");
            $table->timestamps();
            $table->unique( array('link_id','user_id') );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('link_votes');
    }
}
