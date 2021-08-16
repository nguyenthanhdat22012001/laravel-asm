<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_children', function (Blueprint $table) {
            $table->id();
            $table->string('cchild_name')->unique();
            $table->string('cchild_slug')->index();
            $table->string('cchild_description')->nullable();
            $table->unsignedBigInteger('cchil_parent')->nullable();
            $table->tinyInteger('cchild_active')->default(1);
            $table->timestamps();
        });

        Schema::table('category_children', function($table)
        {
            $table->foreign('cchil_parent')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_children');
    }
}
