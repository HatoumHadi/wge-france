<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Filament\Resources\Concerns\Translatable;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'name',
        'description',
        'model',
        'brand',
        'speed',
        'type',
        'resolution',
        'power_consumption',
        'max_print_size',
        'connectivity',
        'condition',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
