<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use App\Models\Setting;
use Livewire\Component;

class Footer extends Component
{
    public $logo;

    public $x;
    public $instagram;
    public $facebook;
    public $linkedIn;

    public function mount()
    {
        $this->logo = LandingSetting::where('key', 'logo')->first()->value;

        $settings = Setting::whereIn('key', [
            'instagram_link',
            'facebook_link',
            'x_link',
            'linkedIn_link',
        ])->pluck('value', 'key');

        $this->instagram = $settings['instagram_link'];
        $this->facebook = $settings['facebook_link'];
        $this->x = $settings['x_link'];
        $this->linkedIn = $settings['linkedIn_link'];
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
