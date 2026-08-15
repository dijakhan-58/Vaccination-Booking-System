<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * booking_id is unique here because a booking results in at most one
     * vaccination record (1:1, matching your ERD's BOOKINGS ||--o|
     * VACCINATION_RECORDS). Both foreign keys use restrictOnDelete —
     * this is permanent medical history and must never disappear as a
     * side effect of deleting a booking or a staff user.
     */
    public function up(): void
    {
        Schema::create('vaccination_records', function (Blueprint $table) {
    $table->id();

    $table->foreignId('booking_id')
          ->constrained('bookings')
          ->onDelete('cascade');

    $table->foreignId('administered_by')
          ->constrained('users');

    $table->date('vaccination_date');

    $table->integer('dose_number')->default(1);

    $table->date('next_dose_date')->nullable();

    $table->text('side_effects')->nullable();

    $table->string('status')->default('completed');

    $table->text('remarks')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccination_records');
    }
};