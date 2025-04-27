<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OurVision extends Component
{
    public $section_title;
    public $our_vision_section_second_title;

    public $our_vision_header_image;
    public $description;
    public $primary_image;
    public $second_image;
    public $third_image;


    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'our_vision_section_title',
            'our_vision_section_second_title',
            'our_vision_header_image',
            'our_vision_description',
            'our_vision_primary_image',
            'our_vision_second_image',
            'our_vision_third_image',
        ])->pluck('value', 'key');

        $this->section_title = $settings['our_vision_section_title'];
        $this->our_vision_section_second_title = $settings['our_vision_section_second_title'];
        $this->our_vision_header_image = $settings['our_vision_header_image'];
        $this->description = $settings['our_vision_description'];

        $this->primary_image = LandingSetting::getImageUrl($settings['our_vision_primary_image']);
        $this->second_image = LandingSetting::getImageUrl($settings['our_vision_second_image']);
        $this->third_image = LandingSetting::getImageUrl($settings['our_vision_third_image']);
    }

    public function redirectToHome()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.our-vision')->layout('components.layouts.app');
    }
}
