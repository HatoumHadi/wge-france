<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    use Translatable;

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    public static function getNavigationGroup(): ?string
    {
        return 'Shop';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('trans.name'))
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        $set('slug', str()->slug($state ?? ''));
                    })
                    ->maxLength(50),

                Forms\Components\TextInput::make('slug')
                    ->label(__('trans.slug'))
                    ->disabled()
                    ->maxLength(255),

                Forms\Components\TextInput::make('model')
                    ->label(__('trans.model'))
                    ->maxLength(255),

                Forms\Components\TextInput::make('brand')
                    ->label(__('trans.product_brand'))
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('type')
                    ->label(__('trans.product_type'))
                    ->maxLength(255),

                Forms\Components\TextInput::make('speed')
                    ->label(__('trans.product_speed')),

                Forms\Components\TextInput::make('resolution')
                    ->label(__('trans.product_resolution'))
                    ->maxLength(255),


                Forms\Components\TextInput::make('max_print_size')
                    ->label(__('trans.product_max_print_size'))
                    ->maxLength(255),

                Forms\Components\TextInput::make('connectivity')
                    ->label(__('trans.product_connectivity'))
                    ->maxLength(255),

                Forms\Components\TextInput::make('power_consumption')
                    ->label(__('trans.product_power_consumption')),

                Forms\Components\TextInput::make('condition')
                    ->label(__('trans.product_condition'))
                    ->required(),

                Forms\Components\TextInput::make('stock_quantity')
                    ->required()
                    ->label(__('trans.product_stock_quantity'))
                    ->numeric()
                    ->default(1),

                Forms\Components\TextInput::make('price')
                    ->label(__('trans.product_price'))
                    ->numeric()
                    ->prefix(Setting::where('key', 'currency')->first()->value),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->label(__('trans.product_category'))
                    ->getOptionLabelFromRecordUsing(fn($record, $livewire) => $record->getTranslation('name', $livewire->activeLocale))
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label(__('trans.description'))
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('warranty')
                    ->label(__('trans.product_warranty'))
                    ->numeric(),

                Forms\Components\TextInput::make('manufacture_year')
                    ->label(__('trans.product_manufacture_year'))
                    ->numeric(),

                Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->label(__('trans.images'))
                    ->disk('public')
                    ->directory('products')
                    ->columnSpanFull(),


                Forms\Components\Toggle::make('color_capability')
                    ->label(__('trans.product_color_capability')),


                Forms\Components\Toggle::make('duplex')
                    ->label(__('trans.product_duplex')),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('trans.name'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('model')
                    ->label(__('trans.model'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('brand')
                    ->label(__('trans.product_brand'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('type')
                    ->label(__('trans.product_type'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('speed')
                    ->label(__('trans.product_speed'))
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('resolution')
                    ->label(__('trans.product_resolution'))
                    ->searchable(),

                Tables\Columns\TextColumn::make('max_print_size')
                    ->label(__('trans.product_max_print_size'))
                    ->searchable(),

                Tables\Columns\IconColumn::make('color_capability')
                    ->label(__('trans.product_color_capability'))
                    ->boolean(),

                Tables\Columns\IconColumn::make('duplex')
                    ->label(__('trans.product_duplex'))
                    ->boolean(),

                Tables\Columns\TextColumn::make('connectivity')
                    ->searchable(),

                Tables\Columns\TextColumn::make('power_consumption')
                    ->numeric()
                    ->label(__('trans.product_power_consumption'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('condition')
                    ->label(__('trans.product_condition')),

                Tables\Columns\TextColumn::make('stock_quantity')
                    ->numeric()
                    ->label(__('trans.product_stock_quantity'))
                    ->sortable()
                    ->badge(),

                Tables\Columns\TextColumn::make('price')
                    ->label(__('trans.product_price'))
                    ->money(Setting::where('key', 'currency')->first()->name)
                    ->sortable(),

                Tables\Columns\TextColumn::make('warranty')
                    ->label(__('trans.product_warranty'))
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('manufacture_year')
                    ->label(__('trans.product_manufacture_year')),

                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->label(__('trans.product_category'))
                    ->getStateUsing(function ($record, $livewire) {
                        if ($record->category) {
                            return $record->category->getTranslation('name', $livewire->activeLocale);
                        }
                        return null;
                    })
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        $locales = ['fr', 'en', 'ar'];

        $currentLocale = app()->getLocale();

        if (!in_array($currentLocale, $locales)) {
            $locales[] = $currentLocale;
        }

        usort($locales, function ($a, $b) use ($currentLocale) {
            return $a === $currentLocale ? -1 : 1;
        });

        return $locales;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
