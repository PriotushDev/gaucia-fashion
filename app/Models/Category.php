<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
      'name',
      'description',
      'image',
      'status',
    ];

    protected static function booted()
    {
        static::deleting(function ($category){
            if($category->image && Storage::disk('public')->exists($category->image)){
                Storage::disk('public')->delete($category->image);
            }
        });
    }
}
