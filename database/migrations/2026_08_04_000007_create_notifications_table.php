<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * cascadeOnDelete on parent_id is fine here: notifications have no
     * value once the recipient user account is gone.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
    $table->id();

    $table->foreignId('parent_id')
          ->constrained('users')
          ->onDelete('cascade');

    $table->string('title');
    $table->text('message');

    $table->string('status')->default('unread');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};