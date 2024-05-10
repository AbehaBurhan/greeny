<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'quantity',
        'sku',
        'price',
        'availability',
        'category_id',
        'brand_id',
        'shipping_type_id',
        'is_active'
    ];
    protected $table = "products";

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function shippingtype()
    {
        return $this->belongsTo(ShippingType::class, 'shipping_type_id');
    }
}
