<?php

namespace App\Filament\Resources\LanguageLineResource\Pages;

use App\Filament\Resources\LanguageLineResource;
use Kenepa\TranslationManager\Resources\LanguageLineResource\Pages\EditLanguageLine as EditRecord;

class EditLanguageLine extends EditRecord
{
    protected static string $resource = LanguageLineResource::class;
}
