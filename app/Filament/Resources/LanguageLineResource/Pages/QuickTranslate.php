<?php

namespace App\Filament\Resources\LanguageLineResource\Pages;

use App\Filament\Resources\LanguageLineResource;
use Kenepa\TranslationManager\Pages\QuickTranslate as Page;

class QuickTranslate extends Page
{
    protected static string $resource = LanguageLineResource::class;
}
