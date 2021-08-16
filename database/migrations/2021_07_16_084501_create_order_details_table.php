<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('orD_or_id');
            $table->unsignedBigInteger('orD_p_id');
            $table->string('orD_p_sku');
            $table->string('orD_p_name');
            $table->string('orD_p_avatar');
            $table->string('orD_qty');
            $table->integer('orD_p_price');
            $table->integer('orD_p_sale');
            $table->integer('orD_p_subTotal');
            $table->timestamps();
        });
        Schema::table('order_details', function($table)
        {
            $table->foreign('orD_or_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('orD_p_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
