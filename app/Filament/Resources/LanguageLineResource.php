<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LanguageLineResource\Pages\EditLanguageLine;
use App\Filament\Resources\LanguageLineResource\Pages\ListLanguageLines;
use App\Filament\Resources\LanguageLineResource\Pages\QuickTranslate;
use App\Models\LanguageLine;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Kenepa\TranslationManager\Resources\LanguageLineResource as Resource;

class LanguageLineResource extends Resource
{
    protected static ?string $model = LanguageLine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getPages(): array
    {
        return [
            'index' => ListLanguageLines::route('/'),
            'edit' => EditLanguageLine::route('/{record}/edit'),
            'quick-translate' => QuickTranslate::route('/quick-translate'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
