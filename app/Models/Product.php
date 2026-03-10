<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [

        'category_id',
        'subcategory_id',
        'brand_id',
        'unit_id',

        'name',
        'code',
        'stock',
        'price',

        'short_description',
        'description',

        'thumbnail',

        'feature_status',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

}
