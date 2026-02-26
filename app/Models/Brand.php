<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Brand extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    // Auto delete image when brands is deleted
    protected static function booted()
    {
        static::deleting(function ($brand) {
            if ($brand->image && Storage::disk('public')->exists($brand->image)) {
                Storage::disk('public')->delete($brand->image);
            }
        });
    }
}
