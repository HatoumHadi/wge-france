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

    public $contact_section_address_content;
    public $contact_section_whatsapp_content;
    public $contact_telephone_content;
    public $contact_email_content;





    public function mount()
    {
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


        $data = LandingSetting::whereIn('key', [
            'contact_section_address_content',
            'contact_section_whatsapp_content',
            'contact_telephone_content',
            'contact_email_content',
            'logo',
        ])->pluck('value', 'key');

        $this->logo = $data['logo'];
        $this->contact_email_content = $data['contact_email_content'];
        $this->contact_telephone_content = $data['contact_telephone_content'];
        $this->contact_section_whatsapp_content = $data['contact_section_whatsapp_content'];
        $this->contact_section_address_content = $data['contact_section_address_content'];

    }

    public function render()
    {
        return view('livewire.footer');
    }
}
