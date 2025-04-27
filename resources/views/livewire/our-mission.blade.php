<div>
    <section id="our_mission">

        <div class="relative w-full h-[400px]">
            <img src="{{ asset($our_mission_header_image) }}" class="w-full h-full object-cover" alt="points">

            <div class="absolute inset-0 flex items-center justify-center text-center bg-black/50">
                <div class="text-white">
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[40px] text-primary">
                       {{$section_title}}
                    </h2>
                    <span class="mb-2 block text-2xl font-size-header font-semibold">
            {{$our_mission_section_secondary_title}}
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
                    <p class="ml-2">{{$section_title}}</p>
                </div>
            </div>
        </div>


        <div class="container mx-auto wow fadeInUp" data-wow-delay=".2s">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="sm:hidden w-full px-4 lg:w-1/2">
                    <div class="mb-12 max-w-[540px] lg:mb-0 lg:ml-7">
                        <p class="mt-4 sm:mt-0 text-center sm:text-left mb-10 font-size-content leading-relaxed text-body-color dark:text-dark-6">
                            {!! $description !!}
                        </p>
                    </div>
                </div>

                <div class="hidden sm:block lg:block w-full px-4 lg:w-1/2">
                    <div class="mb-12 max-w-[540px] lg:mb-0 lg:ml-7">
                        <p class="mb-10 font-size-content leading-relaxed text-body-color dark:text-dark-6">
                            {!! $description !!}
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 lg:w-1/2">
                    <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                        <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                            <div
                                class="mb-4 sm:mb-8 sm:h-full lg:mb-4 xl:mb-8">
                                <img src="{{ asset($primary_image) }}" alt="about image"
                                     class="h-full w-full object-cover object-center"/>
                            </div>
                        </div>
                        <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                            <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                <img src="{{ asset($second_image) }}" alt="about image"
                                     class="h-full w-full object-cover object-center"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
