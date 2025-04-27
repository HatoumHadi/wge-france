<?php

namespace App\Livewire;

use App\Models\Faq;
use App\Models\LandingSetting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class FAQSection extends Component
{
    public $faqs;

    public $faq_section_title;
    public $faq_section_secondary_title;
    public $faq_header_image;

    public function mount()
    {
        $this->faqs = Faq::all();

        $settings = LandingSetting::whereIn('key', [
            'faq_section_title',
            'faq_section_secondary_title',
            'faq_header_image',
        ])->pluck('value', 'key');

        $this->faq_section_title = $settings['faq_section_title'];
        $this->faq_section_secondary_title = $settings['faq_section_secondary_title'];
        $this->faq_header_image = $settings['faq_header_image'];
    }

    public function redirectToHome()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.f-a-q-section')->layout('components.layouts.app');
    }
}
