<?php

namespace App\Filament\Pages;

use App\Models\LandingSetting;
use Filament\Actions\Action;
use Filament\Forms\Components\Fieldset;
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
use Filament\Resources\Concerns\Translatable;

class LandingSettings extends Page
{
    use Translatable;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static string $view = 'filament.pages.landing-settings';

    public static function getNavigationGroup(): ?string
    {
        return __("trans.settings");
    }

    public function getHeading(): string
    {
        return __("trans.content_management");
    }

    public static function getNavigationLabel(): string
    {
        return __("trans.content_management");
    }

    public ?array $data = [];

    public function mount()
    {
        $settings = LandingSetting::pluck('value', 'key');
        foreach ($settings as $key => $value) {
            if (is_string($value) && $this->isJson($value)) {
                $settings[$key] = json_decode($value, true);
            }
        }
        $this->form->fill($settings->toArray());
    }

    private function isJson($string)
    {
        json_decode($string);
        return json_last_error() === JSON_ERROR_NONE;
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
            Tabs::make()
                ->schema([
                    Tab::make('Header')
                        ->lazy()
                        ->schema([
                            FileUpload::make('logo')
                                ->image()
                                ->columnSpanFull()
                                ->required()
                                ->label(__('trans.logo_image')),

                            TextInput::make('home_content_over_slider_header')
                                ->label(__('trans.home_title'))
                                ->columnSpanFull()
                                ->required(),

                            RichEditor::make('home_content_over_slider_description')
                                ->label(__('trans.home_description'))
                                ->columnspan(2)
                                ->required(),

                            FileUpload::make('header_images')
                                ->multiple()
                                ->reorderable()
                                ->label(__('trans.images')),

                            Section::make(__('trans.section_one'))->schema([
                                TextInput::make('home_section_one_title')
                                    ->label(__('trans.home_service_title'))
                                    ->columnspan(2)
                                    ->required(),
                                TextInput::make('home_section_one_title_one')
                                    ->label(__('trans.title_one'))
                                    ->required(),
                                Textarea::make('home_section_one_description_one')
                                    ->label(__('trans.description_one'))
                                    ->required(),
                                IconPicker::make(name: 'home_section_one_icon_one')
                                    ->columnspan(2)
                                    ->preload()
                                    ->required(),
                                TextInput::make('home_section_one_title_two')
                                    ->label(__('trans.title_two'))
                                    ->required(),
                                Textarea::make('home_section_one_description_two')
                                    ->label(__('trans.description_two'))
                                    ->required(),
                                IconPicker::make(name: 'home_section_one_icon_two')
                                    ->columnspan(2)
                                    ->preload()
                                    ->required(),
                                TextInput::make('home_section_one_title_three')
                                    ->label(__('trans.title_three'))
                                    ->required(),
                                Textarea::make('home_section_one_description_three')
                                    ->label(__('trans.description_three'))
                                    ->required(),
                                IconPicker::make(name: 'home_section_one_icon_three')
                                    ->columnspan(2)
                                    ->preload()
                                    ->required(),
                                TextInput::make('home_section_one_title_four')
                                    ->label(__('trans.title_four')),
                                Textarea::make('home_section_one_description_four')
                                    ->label(__('trans.description_four')),
                                IconPicker::make(name: 'home_section_one_icon_four')
                                    ->columnspan(2)
                                    ->preload(),
                            ])->columns(2),
                        ])->label(__('trans.home')),

                    Tab::make('About')
                        ->lazy()
                        ->schema([
                            TextInput::make('about_primary_title')
                                ->required()
                                ->label(__('trans.primary_title'))
                                ->maxLength(255),

                            TextInput::make('about_secondary_title')
                                ->required()
                                ->label(__('trans.about_secondary_title'))
                                ->maxLength(255),

                            FileUpload::make('about_header_image')
                                ->required()
                                ->preserveFilenames()
                                ->label(__('trans.about_header_image')),

                            RichEditor::make('about_description')
                                ->required()
                                ->label(__('trans.description')),

                            FileUpload::make('about_video')
                                ->required()
                                ->maxSize(102400)
                                ->directory('about-us')
                                ->preserveFilenames()
                                ->label(__('trans.video')),

                            TextInput::make('about_work_shop_title')
                                ->required()
                                ->label(__('trans.work_shop_title'))
                                ->maxLength(255),

                            FileUpload::make('about_work_shop_images')
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->required()
                                ->label(__('trans.work_shop_images')),
                        ])->label(__('trans.about_us')),

                    Tab::make('Our Vision')
                        ->lazy()
                        ->schema([
                            TextInput::make('our_vision_section_title')->required()->label(__('trans.title'))->required(),
                            TextInput::make('our_vision_section_second_title')->required()->label(__('trans.section_second_title'))->required(),
                            RichEditor::make('our_vision_description')->required()->label(__('trans.description'))->required(),
                            FileUpload::make('our_vision_header_image')->required()->label(__('trans.our_vision_header_image')),
                            FileUpload::make('our_vision_primary_image')->label(__('trans.primary_image')),
                            FileUpload::make('our_vision_second_image')->label(__('trans.second_image')),
                            FileUpload::make('our_vision_third_image')->label(__('trans.third_image')),
                        ])->label(__('trans.our_vision')),

                    Tab::make('Our Mission')
                        ->lazy()
                        ->schema([
                            TextInput::make('our_mission_section_title')->label(__('trans.title'))->required(),
                            TextInput::make('our_mission_section_secondary_title')->label(__('trans.our_mission_section_secondary_title'))->required(),
                            FileUpload::make('our_mission_header_image')->required()->label(__('trans.our_mission_header_image')),
                            RichEditor::make('our_mission_description')->label(__('trans.description'))->required(),
                            FileUpload::make('our_mission_primary_image')->label(__('trans.primary_image')),
                            FileUpload::make('our_mission_second_image')->label(__('trans.second_image')),
                        ])->label(__('trans.our_mission')),


                    Tab::make('Faqs')
                        ->lazy()
                        ->schema([
                            TextInput::make('faq_section_title')->label(__('trans.faq_section_title'))->required(),
                            TextInput::make('faq_section_secondary_title')->label(__('trans.faq_section_secondary_title'))->required(),
                            FileUpload::make('faq_header_image')->required()->label(__('trans.faq_header_image')),
                        ])->label(__('trans.faqs')),


                    Tab::make('Contact Us')
                        ->lazy()
                        ->schema([
                            TextInput::make('contact_section_title')->label(__('trans.contact_section_title'))->required(),
                            TextInput::make('contact_section_secondary_title')->label(__('trans.contact_section_secondary_title'))->required(),
                            FileUpload::make('contact_header_image')->required()->label(__('trans.contact_header_image')),

                            Section::make(__('trans.section_contact_us_items'))->schema([

                                TextInput::make('contact_section_address')
                                    ->label(__('trans.contact_address_title'))
                                    ->columnspan(2)
                                    ->required(),

                                TextInput::make('contact_section_address_content')
                                    ->label(__('trans.contact_section_address_content'))
                                    ->columnspan(2)
                                    ->required(),

                                TextInput::make('contact_section_whatsapp')
                                    ->columnspan(2)
                                    ->label(__('trans.contact_section_whatsapp_title'))
                                    ->required(),

                                Textarea::make('contact_section_whatsapp_content')
                                    ->label(__('trans.contact_section_whatsapp_content'))
                                    ->columnspan(2)
                                    ->required(),

                                TextInput::make('contact_telephone')
                                    ->columnspan(2)
                                    ->label(__('trans.contact_telephone_title'))
                                    ->required(),

                                Textarea::make('contact_telephone_content')
                                    ->columnspan(2)
                                    ->label(__('trans.contact_telephone_content'))
                                    ->required(),

                                TextInput::make('contact_email_title')
                                    ->columnspan(2)
                                    ->label(__('trans.contact_email_title')),

                                Textarea::make('contact_email_content')
                                    ->columnspan(2)
                                    ->label(__('trans.contact_email_content')),

                            ])->columns(2),
                        ])->label(__('trans.contact_us')),

                    Tab::make('Products')
                        ->lazy()
                        ->schema([
                            FileUpload::make('product_header_image')
                                ->required()
                                ->label(__('trans.product_header_image')),
                        ])
                        ->label(__('trans.products')),
                ])
        ])->statePath('data');
    }


    public function submit()
    {
        $data = $this->form->getState();
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            LandingSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
        Notification::make()
            ->title('Saved')
            ->success()
            ->send();
    }
}
