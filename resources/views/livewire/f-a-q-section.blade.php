<div>
    <section id="faq">
        <div class="relative w-full h-[400px] mt-[73px]">
            <img src="{{ asset('storage/'.$faq_header_image) }}" class="w-full h-full object-cover" alt="points">

            <div class="absolute inset-0 flex items-center justify-center text-center bg-black/50">
                <div class="text-white">
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[40px] text-primary">
                        {{$faq_section_title}}
                    </h2>
                    <span class="mb-2 block text-2xl font-size-header font-semibold">
            {{$faq_section_secondary_title}}
            </span>
                </div>
            </div>
        </div>

        <div class="mb-4 p-4 flex justify-center bg-gray-200">
            <div class="w-4/5">
                <div class="flex items-center mx-4">
                    <div wire:click="redirectToHome" class="cursor-pointer">
                        <i class="fa-solid fa-house text-primary"></i>
                    </div>
                    <div wire:click="redirectToHome" class="cursor-pointer">
                        <p class="ml-2 text-gray-500">{{ __('trans.home') }}</p>
                    </div>
                    <i class="fa-solid fa-arrow-right text-primary ml-2"></i>
                    <p class="ml-2">{{ __('trans.faq') }}</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col justify-center items-center sm:m-8 mb-8">
            @foreach($faqs as $faq)
                <div class="mb-4 w-10/12 sm:w-4/5 border rounded-2xl mt-6">
                    <div class="flex items-center mx-4">
                        <div
                            class="flex items-center justify-center h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-primary text-white text-sm sm:text-lg font-bold {{ app()->getLocale() == 'ar' ? 'ml-6' : '' }}">
                            Q
                        </div>
                        <div class="pt-6 pl-6 pb-6 text-sm sm:text-base w-full">{{$faq->question}}</div>
                    </div>

                    <div class="border-t border-gray-200 mx-4 mb-6 text-sm flex items-center">
                        <div
                            class="flex items-center justify-center h-7 w-7 sm:h-8 sm:w-8 rounded-full bg-gray-400 text-white text-sm sm:text-lg font-bold {{ app()->getLocale() == 'ar' ? 'ml-6' : '' }}">
                            A
                        </div>
                        <div class="pt-6 pl-6 pb-6 text-sm sm:text-base w-full">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
