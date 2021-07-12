<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name')->unique();
            $table->string('p_slug')->index();
            $table->string('p_sku')->unique();
            $table->string('p_avatar')->nullable();
            $table->mediumText('p_description_short')->nullable();
            $table->text('p_description')->nullable();
            $table->integer('p_price')->default(0);
            $table->integer('p_view')->default(0);
            $table->tinyInteger('p_active')->default(1);
            $table->tinyInteger('p_hot')->default(0);
            $table->integer('p_inventory')->default(0);
            $table->unsignedBigInteger('p_brand_id');
            $table->unsignedBigInteger('p_category_id');
            $table->unsignedBigInteger('p_discount_id')->nullable();
            $table->unsignedBigInteger('p_tag_id')->nullable();
            $table->unsignedBigInteger('p_admin_id')->nullable();
            $table->timestamps();

           

        });

        Schema::table('products', function($table)
        {
            $table->foreign('p_brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('p_category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('p_discount_id')->references('id')->on('discounts')->onDelete('cascade');
            $table->foreign('p_tag_id')->references('id')->on('tags')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
