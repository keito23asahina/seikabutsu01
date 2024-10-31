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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // 投稿者
            $table->foreignId('gym_id')->constrained()->onDelete('cascade'); // 体育館
            $table->string('title');
            $table->text('body');
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); // deleted_at
            $table->timestamp('finished_at')->nullable(); // 投稿終了日
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
