<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->comment('ユーザーID');
            $table->foreignId('shop_id')->constrained()->cascadeOnDelete()->comment('店舗ID');
            $table->date('reservation_date')->comment('予約日');
            $table->time('reservation_time')->comment('予約時間');
            $table->integer('party_size')->comment('予約人数');
            $table->string('status', 10)->comment('予約ステータス：1:予約済,2:来店済,3,:決済完了,4:評価済,99:キャンセル');
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
        Schema::dropIfExists('shop_reservations');
    }
}
