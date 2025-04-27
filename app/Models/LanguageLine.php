<?php

namespace App\Models;

use Spatie\TranslationLoader\LanguageLine as Model;

class LanguageLine extends Model
{
    public $guarded = [];

    protected $casts = ['text' => 'array'];

}
