<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('or_u_id');
            $table->string('or_name');
            $table->string('or_email');
            $table->string('or_phone');
            $table->string('or_address');
            $table->text('or_note');
            $table->integer('or_total');
            $table->tinyInteger('or_status')->default(1);
            $table->unsignedBigInteger('or_pay_id');
            $table->timestamps();
        });
        Schema::table('orders', function($table)
        {
            $table->foreign('or_u_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
