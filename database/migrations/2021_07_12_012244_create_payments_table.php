<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('pay_name')->unique();
            $table->string('pay_slug');
            $table->integer('pay_name_account')->nullable();
            $table->integer('pay_num_account')->nullable();
            $table->integer('pay_fee_shipping')->nullable();
            $table->integer('pay_description_account')->nullable();
            $table->tinyInteger('pay_active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
