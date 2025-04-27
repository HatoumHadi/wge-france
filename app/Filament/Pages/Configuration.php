<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Actions\Action;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Guava\FilamentIconPicker\Forms\IconPicker;

class Configuration extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $view = 'filament.pages.configuration';

    public ?array $data = [];

    public $currencyMapping;

    public static function getNavigationGroup(): ?string
    {
        return __("trans.settings");
    }

    public function getHeading(): string
    {
        return __("trans.configuration");
    }

    public function mount()
    {
        $settings = Setting::pluck('value', 'key');

        $this->currencyMapping = [
            '$' => 'USD',
            '€' => 'EUR',
        ];

        $this->form->fill($settings->toArray());
    }

    public function getFormActions()
    {
        return [
            Action::make('Submit')
                ->submit('submit')
                ->label(__('trans.submit'))
        ];
    }


    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('General')->schema([
                Select::make('currency')
                    ->options($this->currencyMapping)
                    ->label(__('trans.currency'))
                    ->required(),
            ])->label(__('trans.general'))
                ->columns(2),
        ])->statePath('data');
    }


    public function submit()
    {
        $data = $this->form->getState();

        foreach ($data as $key => $value) {
            $code = $this->currencyMapping[$value];

            Setting::updateOrCreate(
                ['key' => $key],
                ['name' => $code, 'value' => $value]
            );
        }

        Notification::make()
            ->title('Saved')
            ->success()
            ->send();
    }

}
