<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $fillable = [
        // Child info
        'full_name', 'gender', 'dob', 'age', 'nationality', 'state_of_origin', 'home_address', 'school_name', 'social_media',
        // Physical details
        'height', 'weight', 'chest', 'waist', 'shoe_size',
        // Parent / Guardian info
        'parent_name', 'relationship', 'phone', 'email', 'parent_social_media', 'residential_address', 'parent_id_type', 'parent_occupation',
        // Talent / Experience
        'has_modeled_before', 'previous_experience', 'special_talents', 'talent_social_media',
        // Health
        'has_medical_condition', 'medical_condition',
        // Payment
        'fee', 'paid','payment_status', 'payment_reference',
    ];
}
