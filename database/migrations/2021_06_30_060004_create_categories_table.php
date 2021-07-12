<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('c_name')->unique();
            $table->string('c_slug')->index();
            $table->string('c_avatar')->nullable();
            $table->string('c_banner')->nullable();
            $table->string('c_description')->nullable();
            $table->unsignedBigInteger('c_parent')->nullable();
            $table->tinyInteger('c_active')->default(1);
            $table->timestamps();

            
        });

        Schema::table('categories', function($table)
        {
            $table->foreign('c_parent')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
