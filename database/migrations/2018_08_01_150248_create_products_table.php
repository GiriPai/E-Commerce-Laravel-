<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('category_id');
            $table->integer('type_id')->nullable();
            $table->string("product_name");
            $table->integer("classification_id");
            $table->integer("price")->nullable();
            $table->integer("dicounted_price")->nullable();
            $table->integer('discount')->default(0);
            $table->text("p_description")->nullable();
            $table->boolean("is_active")->default(1);
            $table->string('product_image')->nullable();
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
