<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    /**
     * Automatically delete images when product is deleted
     */
    protected static function booted()
    {
        static::deleting(function ($product) {

            // Delete thumbnail
            if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
                Storage::disk('public')->delete($product->thumbnail);
            }

            // Delete gallery images
            foreach ($product->images as $image) {

                if (Storage::disk('public')->exists($image->image)) {
                    Storage::disk('public')->delete($image->image);
                }

                $image->delete();
            }

        });
    }

}
