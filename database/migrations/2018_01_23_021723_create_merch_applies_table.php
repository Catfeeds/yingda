<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merch_applies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name')->comment('店铺名字');
            $table->integer('cat_id')->comment('店铺所属分类');
            $table->text('related_images')->comment('相关图片');
            $table->string('phone');
            $table->string('real_name');
            $table->string('address');
            $table->string('map_mark');
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
        Schema::dropIfExists('merch_applies');
    }
}
