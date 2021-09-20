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
            $table->id();
            $table->string("name");
            $table->string("detail");
            $table->string("usage");
            $table->integer("price");
            $table->integer("qty")->default(0);
            $table->unsignedBigInteger("product_category_id");
            $table->foreign("product_category_id")->references("id")->on("product_categories")->onDelete("cascade");
            $table->unsignedBigInteger("promotion_id");
            $table->foreign("promotion_id")->references("id")->on("promotions")->onDelete("cascade");
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
