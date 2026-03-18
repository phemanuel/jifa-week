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
        Schema::create('childrens', function (Blueprint $table) {
            $table->id();

            // CHILD INFORMATION
            $table->string('full_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->date('dob');
            $table->integer('age')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('home_address')->nullable();
            $table->string('school_name')->nullable();
            $table->string('social_media')->nullable();

            // PHYSICAL DETAILS
            $table->decimal('height', 5, 2)->nullable(); // in cm
            $table->decimal('weight', 5, 2)->nullable(); // in kg
            $table->decimal('chest', 5, 2)->nullable();
            $table->decimal('waist', 5, 2)->nullable();
            $table->decimal('shoe_size', 5, 2)->nullable();

            // PARENT / GUARDIAN INFORMATION
            $table->string('parent_name');
            $table->string('relationship');
            $table->string('phone');
            $table->string('email');
            $table->string('parent_social_media')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('parent_id_type')->nullable(); // NIN, Passport, etc.
            $table->string('parent_occupation')->nullable();

            // CHILD TALENT / EXPERIENCE
            $table->boolean('has_modeled_before')->default(false);
            $table->string('previous_experience')->nullable();
            $table->string('special_talents')->nullable();
            $table->string('talent_social_media')->nullable();

            // HEALTH INFORMATION
            $table->boolean('has_medical_condition')->default(false);
            $table->string('medical_condition')->nullable();

            // PAYMENT
            $table->decimal('fee', 10, 2)->default(10000); // Naira
            $table->boolean('paid')->default(false);
            $table->string('payment_reference')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('childrens');
    }
};
