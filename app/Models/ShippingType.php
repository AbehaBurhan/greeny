<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_days',
        'max_days',
        'cost',
        'type',
        'is_active'
    ];
    protected $table = 'shipping_types';

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
