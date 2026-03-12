<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {

            $table->id();

            // BRAND INFO
            $table->string('brand_name');
            $table->string('designer_name');
            $table->year('year_established')->nullable();
            $table->string('instagram')->nullable();
            $table->string('other_socials')->nullable();
            $table->string('website')->nullable();

            // CONTACT
            $table->string('phone');
            $table->string('email');
            $table->text('business_address')->nullable();

            // COLLECTION
            $table->string('category');
            $table->integer('pieces');
            $table->string('collection_title')->nullable();
            $table->text('description')->nullable();

            // PAYMENT
            $table->decimal('fee',10,2)->default(100000);
            $table->string('payment_reference')->nullable();
            $table->boolean('payment_status')->default(false);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('designers');
    }
};
