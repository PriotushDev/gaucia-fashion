<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Unit extends Model
{
    protected $fillable = [
        'name',
        'code',
        'description',
        'image',
        'status',
    ];

    protected static function booted()
    {
        static::deleting(function ($unit) {
            if ($unit->image &&
                Storage::disk('public')->exists($unit->image)) {
                Storage::disk('public')->delete($unit->image);
            }
        });
    }
}
