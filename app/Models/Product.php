<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];

    /**
     * Auto delete image file when product record is deleted (modul kuliah hal 19)
     */
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
        });
    }
}
