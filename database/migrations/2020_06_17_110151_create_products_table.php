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
            $table->integer('brand_id');
            $table->integer('label_id');
            $table->string('title');
            $table->string('picture')->nullable();
            $table->text('short_description');
            $table->text('description');
            $table->integer('totoal_sels');
            $table->string('product_type');
            $table->unsignedBigInteger('is_new')->default(1);
            $table->float('cost');
            $table->float('mrp');
            $table->float('special_price');
            $table->unsignedBigInteger('soft_delete')->default(0);
            $table->unsignedBigInteger('is_draft')->default(0);
            $table->unsignedBigInteger('is_active')->default(0);
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
