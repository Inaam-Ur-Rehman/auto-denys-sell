<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    use HasFactory;

    // protected fields
    public $fillable = [
        'model',
        'brand',
        'year',
        'fuel',
        'transmission',
        'mileage',
        'availability',
        'price',
        'extra_info',
        'name',
        'email',
        'phone',
        'postal_code',
        'photos',
    ];

    //  cast photos array
    protected $casts = [
        'photos' => 'array',
    ];
}
