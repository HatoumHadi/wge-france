<?php

namespace App\View\Components;

use App\Models\LandingSetting;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactInfo extends Component
{

    public $contact_section_whatsapp_content;

    public $contact_telephone_content;

    public $contact_email_content;


    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $settings = LandingSetting::whereIn('key', [
            'contact_section_whatsapp_content',
            'contact_telephone_content',
            'contact_email_content',
        ])->pluck('value', 'key');

        $this->contact_section_whatsapp_content = $settings['contact_section_whatsapp_content'];
        $this->contact_telephone_content = $settings['contact_telephone_content'];
        $this->contact_email_content = $settings['contact_email_content'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-info');
    }
}
