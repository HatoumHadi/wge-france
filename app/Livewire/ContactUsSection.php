<?php

namespace App\Livewire;

use App\Models\ContactUs;
use App\Models\LandingSetting;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\Attributes\Validate;

class ContactUsSection extends Component
{
    public $contact_section_title;
    public $contact_section_secondary_title;
    public $contact_header_image;
    public $contact_section_address;
    public $contact_section_address_content;
    public $contact_section_whatsapp;
    public $contact_section_whatsapp_content;
    public $contact_telephone;
    public $contact_telephone_content;
    public $contact_email_title;
    public $contact_email_content;

    #[Validate('required', message: 'Please enter your name.')]
    #[Validate('min:5', message: 'Your name is too short.')]
    public $name = '';

    #[Validate('required', message: 'Please enter your email.')]
    #[Validate('email', message: 'Your email format is incorrect.')]
    public $email = '';

    #[Validate('required', message: 'Please enter your telephone.')]
    #[Validate('numeric', message: 'The telephone number must be numeric.')]
    public $telephone = '';

    #[Validate('required', message: 'Please enter your message.')]
    #[Validate('min:5', message: 'Your message is too short.')]
    public $message = '';


    protected $rules = [
        'recaptchaToken' => 'required|string',
    ];

    #[Validate('required', message: 'The reCAPTCHA token is required.')]
    #[Validate('string', message: 'The reCAPTCHA token must be a valid string.')]
    public $recaptchaToken;


    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'contact_section_title',
            'contact_section_secondary_title',
            'contact_header_image',
            'contact_section_address',
            'contact_section_address_content',
            'contact_section_whatsapp',
            'contact_section_whatsapp_content',
            'contact_telephone',
            'contact_telephone_content',
            'contact_email_title',
            'contact_email_content',
        ])->pluck('value', 'key');

        $this->contact_section_title = $settings['contact_section_title'];
        $this->contact_section_secondary_title = $settings['contact_section_secondary_title'];
        $this->contact_header_image = $settings['contact_header_image'];
        $this->contact_section_address = $settings['contact_section_address'];
        $this->contact_section_address_content = $settings['contact_section_address_content'];
        $this->contact_section_whatsapp = $settings['contact_section_whatsapp'];
        $this->contact_section_whatsapp_content = $settings['contact_section_whatsapp_content'];
        $this->contact_telephone = $settings['contact_telephone'];
        $this->contact_telephone_content = $settings['contact_telephone_content'];
        $this->contact_email_title = $settings['contact_email_title'];
        $this->contact_email_content = $settings['contact_email_content'];
    }


    /**
     * @throws ConnectionException
     */
    public function save(): void
    {
        $this->validate();

        // Verify the reCAPTCHA token
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $this->recaptchaToken,
        ]);

        if (!$response->json('success')) {
            $this->addError('recaptchaToken', 'reCAPTCHA verification failed.');
            return;
        }

        ContactUs::create(
            $this->only(['name', 'email', 'telephone', 'message'])
        );

        $this->reset();
        $this->dispatch('successConnect');
    }


    public function redirectToHome()
    {
        return redirect()->route('home');
    }


    public function render()
    {
        return view('livewire.contact-us-section')->layout('components.layouts.app');
    }
}
