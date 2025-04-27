<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class OurMission extends Component
{
    public $section_title;
    public $our_mission_section_secondary_title;
    public $our_mission_header_image;
    public $description;
    public $primary_image;
    public $second_image;

    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'our_mission_section_title',
            'our_mission_section_secondary_title',
            'our_mission_header_image',
            'our_mission_description',
            'our_mission_primary_image',
            'our_mission_second_image',
        ])->pluck('value', 'key');

        $this->section_title = $settings['our_mission_section_title'];
        $this->our_mission_section_secondary_title = $settings['our_mission_section_secondary_title'];
        $this->our_mission_header_image = $settings['our_mission_header_image'];
        $this->description = $settings['our_mission_description'];

        $this->primary_image = LandingSetting::getImageUrl($settings['our_mission_primary_image']);
        $this->second_image = LandingSetting::getImageUrl($settings['our_mission_second_image']);
    }

    public function redirectToHome()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.our-mission')->layout('components.layouts.app');
    }
}
