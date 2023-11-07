<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('店舗名');
            $table->foreignId('shop_area_id')->constrained()->cascadeOnDelete()->comment('エリアID');
            $table->foreignId('shop_genre_id')->constrained()->cascadeOnDelete()->comment('ジャンルID');
            $table->text('description')->comment('店舗概要');
            $table->integer('capacity')->comment('席数');
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
        Schema::dropIfExists('shops');
    }
}
