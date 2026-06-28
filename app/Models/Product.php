<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

       protected $fillable = [

        'category_id',
        'brand_id',

        'sku',
        'name',
        'slug',

        'description',

        'cost_price',
        'sale_price',

        'stock',

        'active'
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
            'cost_price' => 'decimal:2',
            'sale_price' => 'decimal:2'
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
