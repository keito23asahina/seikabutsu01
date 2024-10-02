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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // email認証
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // 性別
            $table->unsignedTinyInteger('age')->nullable(); // 年齢
            $table->string('password');
            $table->text('introduction')->nullable(); // 自己紹介
            $table->string('image_url')->nullable(); // プロフィール画像url
            $table->rememberToken(); // ログイン状態保存
            $table->timestamps(); // created_at, updated_at            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
