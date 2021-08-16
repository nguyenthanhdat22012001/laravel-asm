<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('bl_name')->unique();
            $table->string('bl_slug')->index();
            $table->string('bl_avatar')->nullable();
            $table->mediumText('bl_description_short')->nullable();
            $table->text('bl_description')->nullable();
            $table->integer('bl_view')->default(0);
            $table->tinyInteger('bl_active')->default(1);
            $table->tinyInteger('bl_hot')->default(0);
            $table->unsignedBigInteger('bl_categoryBlog_id');
            $table->unsignedBigInteger('bl_admin_id')->nullable();
            $table->timestamps();  

        });
        Schema::table('blogs', function($table)
        {
            $table->foreign('bl_categoryBlog_id')->references('id')->on('category_blogs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
