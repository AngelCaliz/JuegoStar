<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'description', 'sku', 'stock', 
        'price', 'original_price', 'type', 'platform', 
        'category', 'tags', 'variants', 'image_url', 
        'is_featured', 'is_offer'
    ];

    // Castear JSON a Arrays
    protected $casts = [
        'tags' => 'array',
        'variants' => 'array',
        'is_featured' => 'boolean',
        'is_offer' => 'boolean',
    ];
}