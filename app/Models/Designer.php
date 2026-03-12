<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;
    
    protected $fillable = [

        'brand_name',
        'designer_name',
        'year_established',
        'instagram',
        'other_socials',
        'website',

        'phone',
        'email',
        'business_address',

        'category',
        'pieces',
        'collection_title',
        'description',

        'fee',
        'payment_reference'
    ];
}
