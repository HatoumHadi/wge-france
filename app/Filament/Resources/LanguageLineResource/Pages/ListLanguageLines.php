<?php

namespace App\Filament\Resources\LanguageLineResource\Pages;

use App\Filament\Resources\LanguageLineResource;
use Filament\Actions\Action;
use Kenepa\TranslationManager\Actions\SynchronizeAction;
use Kenepa\TranslationManager\Resources\LanguageLineResource\Pages\ListLanguageLines as ListRecords;

class ListLanguageLines extends ListRecords
{
    protected static string $resource = LanguageLineResource::class;

    protected function getActions(): array
    {
        return [
            Action::make('quick-translate')
                ->icon('heroicon-o-bolt')
                ->label(__('translation-manager::translations.quick-translate'))
                ->url(\Kenepa\TranslationManager\Resources\LanguageLineResource::getUrl('quick-translate')),
        ];
    }
}
