<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('ordersn');
            $table->tinyInteger('status')->comment("订单状态 0 表示普通，1表示已支付，2表示已完成");
            $table->decimal('total_fee',10,2)->comment("订单金额");
            $table->string('address')->comment('订单地址');
            $table->tinyInteger('is_paid')->comment('支付状态');
            $table->integer('coupon_id')->comment('优惠券id');
            $table->decimal('coupon_fee',10,2)->comment('优惠金额');
            $table->string('order_name')->comment('订单名称');
            $table->string('order_img_url')->comment('订单名称');
            $table->string('order_charge_off_code')->comment('核销码');
            $table->string('order_charge_off_ercode')->comment('核销二维码');

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
        Schema::dropIfExists('orders');
    }
}
