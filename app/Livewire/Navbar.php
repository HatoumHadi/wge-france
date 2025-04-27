<?php

namespace App\Livewire;

use App\Models\LandingSetting;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Navbar extends Component
{
    public $logo;

    public function mount()
    {
        $this->logo = LandingSetting::where('key', 'logo')->first()->value;
    }

    public function switchLanguage($lang)
    {
        Session::put('locale', $lang);
        Session::save();

        return redirect(url()->previous());
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
