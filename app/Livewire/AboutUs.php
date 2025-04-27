<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AboutUs extends Component
{

    public $about_primary_title;
    public $about_secondary_title;
    public $about_description;
    public $about_video;
    public $about_work_shop_images;
    public $about_work_shop_title;
    public $about_header_image;

    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'about_primary_title',
            'about_header_image',
            'about_secondary_title',
            'about_description',
            'about_video',
            'about_work_shop_title',
            'about_work_shop_images',
        ])->pluck('value', 'key');

        $this->about_primary_title = $settings['about_primary_title'];
        $this->about_header_image = $settings['about_header_image'];
        $this->about_secondary_title = $settings['about_secondary_title'];
        $this->about_description = $settings['about_description'];
        $this->about_video = $settings['about_video'];
        $this->about_work_shop_images = json_decode($settings['about_work_shop_images']);
        $this->about_work_shop_title = $settings['about_work_shop_title'];
    }

    public function redirectToHome()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.about-us')->layout('components.layouts.app');
    }
}
