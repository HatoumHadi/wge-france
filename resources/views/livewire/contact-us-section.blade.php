<div>
    <section id="contact">
        <div class="relative w-full h-[400px]">
            <img src="{{ asset($contact_header_image) }}" class="w-full h-full object-cover" alt="points">

            <div class="absolute inset-0 flex items-center justify-center text-center bg-black/50">
                <div class="text-white">
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[40px] text-primary">
                        {{$contact_section_title}}
                    </h2>
                    <span class="mb-2 block text-2xl font-size-header font-semibold">
            {{$contact_section_secondary_title}}
            </span>
                </div>
            </div>
        </div>
        <div class="mb-4 p-4 flex justify-center bg-gray-200">
            <div class="w-4/5">
                <div class="flex items-center mx-4">
                    <i class="fa-solid fa-house text-primary"></i>
                    <div wire:click="redirectToHome" class="cursor-pointer">
                        <p class="ml-2 text-gray-500">{{ __('trans.home') }}</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-primary ml-2"></i>
                    <p class="ml-2"> {{$contact_section_title}}</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center mt-12">
            <div class="flex flex-col sm:flex-row justify-center items-center sm:space-x-4 w-3/4 mx-auto">
                <div
                    class="p-6 border border-primary rounded-2xl w-full sm:w-1/4 flex flex-col justify-center items-center text-center h-40">
                    <i class="fa-solid fa-location-dot text-primary text-3xl"></i>
                    <h3 class="text-2xl font-bold text-primary mt-3">{{$contact_section_address}}</h3>
                    <p class="mt-3">{{$contact_section_address_content}}</p>
                </div>

                <div
                    class="mt-4 sm:mt-0 p-6 border border-primary rounded-2xl w-full sm:w-1/4 flex flex-col justify-center items-center text-center h-40 cursor-pointer text-primary hover:text-green-500">
                    <a href="https://wa.me/{{str_replace(' ', '', $contact_section_whatsapp_content)}}?text=Hello" target="_blank">
                        <i class="fa-brands fa-whatsapp text-3xl"></i>
                        <h3 class="text-2xl font-bold mt-3">{{$contact_section_whatsapp}}</h3>
                        <p class="mt-3 text-black">{{$contact_section_whatsapp_content}}</p>
                    </a>
                </div>


                <div
                    class="mt-4 sm:mt-0 p-6 border border-primary rounded-2xl w-full sm:w-1/4 flex flex-col justify-center items-center text-center h-40">
                    <i class="fa-solid fa-phone text-primary text-3xl"></i>
                    <h3 class="text-2xl font-bold text-primary mt-3">{{$contact_telephone}}</h3>
                    <p class="mt-3">{{$contact_telephone_content}}</p>
                </div>

                <div
                    class="mt-4 sm:mt-0 p-6 border border-primary rounded-2xl w-full sm:w-1/4 flex flex-col justify-center items-center text-center h-40">
                    <i class="fa-solid fa-envelope text-primary text-3xl"></i>
                    <h3 class="text-2xl font-bold text-primary mt-3">{{$contact_email_title}}</h3>
                    <p class="mt-3">{{$contact_email_content}}</p>
                </div>
            </div>

            <div class="mt-12 w-full">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.3747751482835!2d2.050973576049497!3d49.05626107930745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e690b3e81c6ab3%3A0xaad2044c94e8d5ab!2s4%20Rue%20de%20la%20Chaise%2C%2095300%20Livilliers%2C%20France!5e0!3m2!1sen!2sus!4v1700000000000!5m2!1sen!2sus"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="flex justify-center items-center mb-8 w-full bg-cover bg-center bg-no-repeat relative h-screen"
                 style="background-image: url('{{ asset('storage/img/home-bg.jpg') }}');">
                <form class="w-full max-w-lg p-6 border border-gray-300 rounded-lg shadow-lg bg-gray-300 mt-14 sm:mt-6 mx-4 sm:mx-0"
                      wire:submit="save">
                    <h2 class="text-2xl font-bold text-center text-primary mb-6">{{ __('trans.get_in_touch') }}</h2>

                    <!-- Name Field -->
                    <div>
                        <label for="name"
                               class="block text-lg font-medium text-gray-700">{{ __('trans.contact_name') }}</label>
                        <input
                            type="text"
                            wire:model="name"
                            id="name"
                            name="name"
                            required
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-gray-400"
                            placeholder="{{ __('trans.contact_name_placeholder') }}">
                    </div>

                    <div class="mb-4">
                        @error('name') <span class="error font-bold text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Telephone Field -->
                    <div>
                        <label for="telephone"
                               class="block text-lg font-medium text-gray-700">{{ __('trans.contact_telephone') }}</label>
                        <input
                            type="tel"
                            wire:model="telephone"
                            id="telephone"
                            name="telephone"
                            required
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-gray-400"
                            placeholder="{{ __('trans.contact_telephone_placeholder') }}">
                    </div>
                    <div class="mb-4">
                        @error('telephone') <span class="error font-bold text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email"
                               class="block text-lg font-medium text-gray-700">{{ __('trans.contact_email') }}</label>
                        <input
                            type="email"
                            wire:model="email"
                            id="email"
                            name="email"
                            required
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-gray-400"
                            placeholder="Your Email">
                    </div>
                    <div class="mb-4">
                        @error('email') <span class="error font-bold text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <!-- Message Field -->
                    <div>
                        <label for="message"
                               class="block text-lg font-medium text-gray-700">{{__('trans.contact_message')}}</label>
                        <textarea
                            id="message"
                            wire:model="message"
                            name="message"
                            rows="5"
                            required
                            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent placeholder:text-gray-400"
                            placeholder="{{ __('trans.contact_message_placeholder') }}"></textarea>
                    </div>
                    <div class="mb-4">
                        @error('message') <span class="error font-bold text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <input type="hidden" id="recaptchaToken" wire:model="recaptchaToken">
                    @error('recaptchaToken') <span class="text-red-500">{{ $message }}</span> @enderror

                    <!-- Submit Button -->
                    <div class="flex justify-center mt-2">
                        <button
                            type="submit"
                            id="submitBtn"
                            wire:loading.attr="disabled"
                            wire:loading.class="opacity-50"
                            class="bg-primary text-white py-2 px-6 rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-primary hover:bg-secondary">
                            <x-loader size="20" wire:loading wire:target='submit'/>
                            {{ __('trans.contact_button_submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <style>
        div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
            background-color: #ff7f38;
        }

        input::placeholder {
            color: white;
        }

        textarea::placeholder {
            color: white;
        }
    </style>

</div>



@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site') }}"></script>

    <script>
        document.getElementById('submitBtn').addEventListener('click', function (event) {
            event.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ config('services.recaptcha.site') }}', {action: 'submit'}).then(function (token) {
                    @this.
                    set('recaptchaToken', token);
                    @this.
                    call('save');
                });
            });
        });


        title = '{{ __('trans.success') }}';
        text = '{{ __('trans.your_message_was_sent_successfully') }}';
        document.addEventListener('successConnect', event => {
            Swal.fire({
                title: title,
                text: text,
                icon: 'success',
                confirmButtonText: 'OK',
                allowOutsideClick: true,
            });
        });
    </script>

@endpush
