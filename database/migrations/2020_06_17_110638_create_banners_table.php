<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture');
            $table->string('link');
            $table->string('promotional_message');
            $table->string('html_bannar');
            $table->unsignedBigInteger('is_active')->default(0);
            $table->unsignedBigInteger('is_draft')->default(0);
            $table->unsignedBigInteger('soft_delete')->default(0);
            $table->unsignedBigInteger('max_display')->default(0);
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
        Schema::dropIfExists('banners');
    }
}
