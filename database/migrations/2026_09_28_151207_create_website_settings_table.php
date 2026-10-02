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
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('hero_badge')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('hero_highlight')->nullable();
            $table->text('hero_description')->nullable();

            // About
            $table->string('about_badge')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_highlight')->nullable();
            $table->text('about_description')->nullable();
            $table->text('about_profile')->nullable();
            $table->year('about_founded_year')->nullable();
            $table->string('about_vision_title')->nullable();
            $table->text('about_vision')->nullable();
            $table->string('about_mission_title')->nullable();
            $table->text('about_mission')->nullable();

            // Contact
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_whatsapp')->nullable();
            $table->text('contact_address')->nullable();
            $table->string('contact_hours')->nullable();
            $table->text('contact_maps_url')->nullable();

            // Social Media
            $table->string('social_linkedin')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_settings');
    }
};
