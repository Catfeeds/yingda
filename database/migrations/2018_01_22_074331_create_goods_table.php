<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_name');
            $table->integer('shop_id');
            $table->integer('cate_id');
            $table->string('thumb');
            $table->text('description');
            $table->string('goodsn');
            $table->decimal('marketprice',10,2);
            $table->decimal('price',10,2);
            $table->integer('total');
            $table->text('thumbs');
            $table->tinyInteger('status')->comment('0表示下架，1表示上架');
            $table->integer('storage');
            $table->string('content');
            $table->integer('sales');
//            $table->
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
        Schema::dropIfExists('goods');
    }
}
