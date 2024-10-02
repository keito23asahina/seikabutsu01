<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->constrained(); // 都道府県
            $table->string('name'); // 体育館名
            $table->string('address'); // 住所
            $table->string('phone')->nullable(); // 電話番号
            $table->string('email')->nullable(); // メールアドレス
            $table->string('opening_hours')->nullable(); // 開館時間
            $table->string('reserve_way')->nullable(); // 簡潔な予約方法説明
            $table->string('reserve_link')->nullable(); // 予約ページへのリンク
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
