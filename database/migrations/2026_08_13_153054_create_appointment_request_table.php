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
        Schema::create('appointment_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id_fk");
            $table->foreign("user_id_fk")->references("id")->on("users")->onDelete("cascade");
            $table->unsignedBigInteger("child_id_fk");
            $table->foreign("child_id_fk")->references("id")->on("children")->onDelete("cascade");
            $table->unsignedBigInteger("hospital_id_fk");
            $table->foreign("hospital_id_fk")->references("id")->on("hospitals")->onDelete("cascade");
            $table->unsignedBigInteger("vaccine_id_fk");
            $table->foreign("vaccine_id_fk")->references("id")->on("vaccines")->onDelete("cascade");
            $table->boolean("is_approved")->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_request');
    }
};