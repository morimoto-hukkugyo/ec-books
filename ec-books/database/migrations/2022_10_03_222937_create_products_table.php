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
            $table->increments('id');
            $table->unsignedBigInteger('category_id')->default(0);
            $table->string('name', 100)->nullable();
            $table->string('image')->nullable();
            $table->string('introduction', 1000)->default('商品の説明はありません。');
            $table->integer('price');
            $table->string('writer_name', 30);
            $table->string('writer_intro', 300)->nullable();
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
        Schema::dropIfExists('products');
    }
}
