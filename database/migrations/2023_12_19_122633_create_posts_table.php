<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('posts', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('content')->nullable();
      $table->string('image')->nullable();
      $table->string('meta_title')->nullable();
      $table->string('meta_description')->nullable();
      $table->string('meta_keyword')->nullable();
      $table->integer('order');
      // Status: 1-Active; 2-IsActive; 3-Draft;
      $table->string('status');
      $table->timestamps();
      $table->softDeletes();
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
