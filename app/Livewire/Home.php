<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class Home extends Component
{

    public $title;
    public $section_one_title;
    public $section_one_description;
    public $section_two_title;
    public $section_two_description;
    public $section_three_title;
    public $section_three_description;
    public $section_four_title;
    public $section_four_description;

    public $images;

    public $about_secondary_title;
    public $about_description;


    public $home_content_over_slider_header;
    public $home_content_over_slider_description;


    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'home_section_one_title',
            'header_images',

            'home_section_one_title_one',
            'home_section_one_description_one',

            'home_section_one_title_two',
            'home_section_one_description_two',

            'home_section_one_title_three',
            'home_section_one_description_three',

            'home_section_one_title_four',
            'home_section_one_description_four',

            'about_secondary_title',
            'about_description',

            'home_content_over_slider_header',
            'home_content_over_slider_description',

        ])->pluck('value', 'key');

        $this->title = $settings['home_section_one_title'];

        $this->section_one_title = $settings['home_section_one_title_one'];
        $this->section_one_description = $settings['home_section_one_description_one'];

        $this->section_two_title = $settings['home_section_one_title_two'];
        $this->section_two_description = $settings['home_section_one_description_two'];

        $this->section_three_title = $settings['home_section_one_title_three'];
        $this->section_three_description = $settings['home_section_one_description_three'];

        $this->section_four_title = $settings['home_section_one_title_four'];
        $this->section_four_description = $settings['home_section_one_description_four'];

        $this->images = json_decode($settings['header_images']);

        $this->about_secondary_title = $settings['about_secondary_title'];
        $this->about_description = $settings['about_description'];

        $this->home_content_over_slider_header = $settings['home_content_over_slider_header'];
        $this->home_content_over_slider_description = $settings['home_content_over_slider_description'];
    }


    public function redirectToAboutUs()
    {
        return redirect()->route('about-us');
    }

    public function redirectToProducts()
    {
        return redirect()->route('products');
    }

    public function render()
    {
        return view('livewire.home')->layout('components.layouts.app');
    }
}
