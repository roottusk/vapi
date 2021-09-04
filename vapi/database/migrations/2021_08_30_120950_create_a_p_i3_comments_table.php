<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAPI3CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_p_i3_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postid');
            $table->string('deviceid');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('commenttext');
            $table->string('username');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_p_i3_comments');
    }
}
