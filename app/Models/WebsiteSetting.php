<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    protected $fillable = [
        'hero_badge',
        'hero_title',
        'hero_highlight',
        'hero_description',

        'about_badge',
        'about_title',
        'about_highlight',
        'about_description',
        'about_founded_year',
        'about_profile',
        'about_vision_title',
        'about_vision',
        'about_mission_title',
        'about_mission',

        'contact_email',
        'contact_phone',
        'contact_whatsapp',
        'contact_address',
        'contact_hours',
        'contact_maps_url',

        'social_linkedin',
        'social_instagram',
        'social_facebook',
    ];
}
