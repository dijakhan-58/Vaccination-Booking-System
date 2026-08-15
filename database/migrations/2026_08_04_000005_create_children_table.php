<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * parent_id uses restrictOnDelete (not cascade): a child's medical and
     * vaccination history is valuable even if a parent account is removed,
     * so the database refuses the delete rather than silently wiping
     * children records. Deletion of a parent with children must be a
     * deliberate, handled action in the application layer.
     */
    public function up(): void
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id");
            $table->foreign("parent_id")->references("id")->on("users")->onDelete('cascade');
            // $table->foreignId('parent_id')
            //     ->constrained('users')
            //     ->onDelete('cascade');

            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('gender');

            $table->string('blood_group')->nullable();
            $table->string('b_form_number')->nullable();

            $table->decimal('weight', 5, 2)->nullable();

            $table->text('medical_notes')->nullable();
            $table->text('allergy_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};