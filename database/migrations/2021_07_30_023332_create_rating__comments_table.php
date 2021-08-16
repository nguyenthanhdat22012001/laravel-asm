<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating__comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rc_u_id');
            $table->unsignedBigInteger('rc_p_id');
            $table->string('rc_comment');
            $table->integer('rc_stars');
            $table->timestamps();
        });
        Schema::table('rating__comments', function($table)
        {
            $table->foreign('rc_u_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rc_p_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating__comments');
    }
}
