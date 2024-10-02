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
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prefecture_id')->constrained()->onDelete('cascade'); // 都道府県
            $table->string('name'); // 市区町村名
            $table->string('reserve_way')->nullable(); // 簡単な予約方法説明
            $table->string('reserve_link')->nullable(); // 予約ページへのリンク
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
