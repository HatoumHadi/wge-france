<div id="home">
    <div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide relative">
                        <img src="{{asset('storage/'.$image)}}" alt="" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-45"></div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Content Overlay -->
            <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 z-50 text-center w-full sm:w-auto sm:px-4 p-4 sm:p-0">
            <div class="text-white rounded-lg shadow-lg sm:p-6 max-w-2xl">
                    <h1 class="text-2xl md:text-4xl font-bold mb-4">
                        {{$home_content_over_slider_header}}
                    </h1>
                    <div class="text-base md:text-lg mb-6">
                        {!! $home_content_over_slider_description !!}
                    </div>
                    <button
                        wire:click="redirectToProducts()"
                        class="bg-primary text-white text-lg font-bold py-3 px-6 rounded-full shadow-lg hover:bg-secondary focus:ring-2 focus:ring-white focus:outline-none">
                        {{__('trans.discover_machines')}}
                    </button>
                </div>
            </div>
        </div>

        <div>
            <section class="relative z-20 overflow-hidden bg-gray-1 pt-24 bg-gray-50">
                <div class="container mx-auto wow fadeInUp" data-wow-delay=".2s">
                    <div class="text-center mb-10">
                        <h2 class="text-3xl font-bold text-primary sm:text-4xl md:leading-[1.2] mb-6">
                            {{$title}}
                        </h2>
                    </div>
                    <div class="flex flex-wrap justify-between">
                        @foreach ([
                            ['title' => $section_one_title, 'description' => $section_one_description, 'icon' => $section_one_icon],
                            ['title' => $section_two_title, 'description' => $section_two_description, 'icon' => $section_two_icon],
                            ['title' => $section_three_title, 'description' => $section_three_description, 'icon' => $section_three_icon],
                            ['title' => $section_four_title, 'description' => $section_four_description, 'icon' => $section_four_icon],
                        ] as $section)
                            @if(!empty($section['title']))
                                <div class="w-full h-full lg:w-1/4 text-start mb-4">
                                    <div class="flex flex-col items-center py-8">
                                        <div class="flex flex-col items-center justify-center sm:mr-5">
                                            <div
                                                class="px-4 flex items-center justify-center h-20 w-20 rounded-full bg-primary text-white border-4 border-white text-xl font-semibold">
                                                <x-dynamic-component :component="$section['icon']"
                                                                     class="h-[50px] w-[50px] text-white"/>
                                            </div>
                                        </div>
                                        <div class="p-5 pb-10">
                                            <h1 class="text-2xl leading-6 font-semibold text-gray-900 text-center py-2">
                                                {{ $section['title'] }}
                                            </h1>
                                            <p class="mt-2 text-base text-center text-body-color dark:text-dark-6 mb-8">
                                                {{ $section['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>

            <section
                class="w-full mt-12 bg-cover bg-center bg-no-repeat relative h-screen"
                style="background-image: url('{{ asset('storage/img/home-bg.jpg') }}');">
                <!-- Overlay -->
                <div class="absolute inset-0  bg-opacity-50"></div>

                <!-- Content -->
                <div class="relative flex justify-center text-black p-4 sm:p-32">
                    <div class="w-4/5 text-center">
                        <p class="text-5xl font-bold">
                            {{__('trans.about')}} <span class="text-primary">{{$about_secondary_title}}</span>
                        </p>
                        <div class="mt-12 leading-relaxed">
                            {!! $about_description !!}
                        </div>
                        <button
                            wire:click="redirectToAboutUs()"
                            class="text-primary font-bold mt-12 border-2 border-primary py-2 px-4 rounded-lg transition-all duration-300 ease-in-out hover:bg-primary hover:text-white hover:border-transparent focus:outline-primary">
                            {{__('trans.read_more')}}
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            autoplay: {
                delay: 3000,
            },
            speed: 500,
            loop: true,
        });
    </script>
</div>
