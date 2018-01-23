<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_types', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->comment('优惠券类型1 满减 2立减');
            $table->string('description');
            $table->integer('shop_id');
            $table->date('dateline');
            $table->string('coupon_name');
            $table->integer('num');
            $table->integer('per_user_limit_num');
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
        Schema::dropIfExists('coupon_types');
    }
}
