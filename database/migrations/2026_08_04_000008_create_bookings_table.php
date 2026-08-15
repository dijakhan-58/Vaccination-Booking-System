<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Bookings are historical records of a workflow (request -> approval ->
     * appointment), so child_id / hospital_id / vaccine_id / created_by all
     * use restrictOnDelete — you don't want a booking's history silently
     * vanishing because someone deleted a hospital or vaccine record.
     * approved_by is nullable (a booking may not be approved yet) and uses
     * nullOnDelete: if the approving admin's account is later removed, the
     * booking survives, it just loses the "who approved it" reference.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
    $table->id();

    $table->foreignId('child_id')
          ->constrained('children')
          ->onDelete('cascade');

    $table->foreignId('hospital_id')
          ->constrained('hospitals')
          ->onDelete('cascade');

    $table->foreignId('vaccine_id')
          ->constrained('vaccines')
          ->onDelete('cascade');

    $table->foreignId('created_by')
          ->constrained('users');

    $table->foreignId('approved_by')
          ->nullable()
          ->constrained('users');

    $table->string('booking_number')->unique();

    $table->date('preferred_date');
    $table->time('appointment_time')->nullable();

    $table->string('reason')->nullable();

    $table->string('status')->default('pending');

    $table->dateTime('approved_at')->nullable();

    $table->timestamps();
});
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};