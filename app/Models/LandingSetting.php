<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class LandingSetting extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['value'];

    public static function getImageUrl($image)
    {
        return ($image && Storage::disk('public')->exists($image)) ? asset('storage/' . $image) : asset('imgs/placeholder.jpg');
    }
}
