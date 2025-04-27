<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Livewire\Component;

class Footer extends Component
{
    public $logo;

    public function mount()
    {
        $this->logo = LandingSetting::where('key', 'logo')->first()->value;
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
