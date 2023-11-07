<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailSendHistorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_send_historie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('send_user_id')->comment('送信ユーザーID');
            $table->unsignedBigInteger('send_shop_id')->comment('送信店舗ID');
            $table->foreignId('email_template_id')->constrained()->cascadeOnDelete()->comment('メールテンプレートID');
            $table->datetime('sent_datetime')->comment('送信日時');
            $table->integer('success_flag')->comment('送信成功フラグ');
            $table->text('error_message')->nullable()->comment('エラーメッセージ');
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
        Schema::dropIfExists('email_send_historie');
    }
}
