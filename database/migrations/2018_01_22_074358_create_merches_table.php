<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->string('shop_name');
            $table->string('cate_id');
            $table->text('description')->comment('店铺描述');
            $table->string('account');
            $table->string('account_password');
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
        Schema::dropIfExists('merches');
    }
}
