<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * No foreign keys — vaccines is a standalone reference table that
     * inventory and bookings will point to later.
     */
    public function up(): void
    {
       Schema::create('vaccines', function (Blueprint $table) {
    $table->id();

    $table->string('name');
    $table->string('disease');
    $table->text('description')->nullable();

    $table->integer('dose_count')->default(1);
    $table->string('manufacturer')->nullable();
    $table->integer('recommended_age_days')->nullable();

    $table->string('availability_status')->default('available');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccines');
    }
};