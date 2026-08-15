<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Hospitals authenticate separately from parent/admin users (their own
     * email + password here), matching the "hospital guard" pattern from
     * your earlier planning. No foreign keys yet — this table has none of
     * its own dependencies, so it can be created immediately after users.
     */
    public function up(): void
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->integer("floors");
            $table->string("profile_img")->nullable();
            $table->string("timings_slot");
            $table->string('status')->default('active'); // active | inactive | pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};