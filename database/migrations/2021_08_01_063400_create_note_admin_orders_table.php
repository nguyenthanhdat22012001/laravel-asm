<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteAdminOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('note_admin_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('noteAdminOrder_u_id');
            $table->unsignedBigInteger('noteAdminOrder_or_id');
            $table->string('noteAdminOrder_comment');
            $table->timestamps();
        });
        Schema::table('note_admin_orders', function($table)
        {
            $table->foreign('noteAdminOrder_u_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('noteAdminOrder_or_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('note_admin_orders');
    }
}
