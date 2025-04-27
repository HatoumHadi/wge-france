<section>
    <div class="relative w-full h-[400px]">
        <img src="{{$primary_image}}" class="w-full h-full object-cover" alt="points">

        <div class="absolute inset-0 flex items-center justify-center text-center bg-black/50">
            <div class="text-white">
                <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[40px] text-primary">
                    {{ __('trans.products') }}
                </h2>
                <span class="mb-2 block text-2xl font-size-header font-semibold">
                {{ __('trans.wge_france') }}
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
                <div wire:click="redirectToProducts" class="cursor-pointer">
                    <p class="ml-2">{{ __('trans.products') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 sm:p-16">
        <div class="flex flex-col sm:flex-row justify-center" x-data="{ openFilter: false }">
            <div class="w-3/4 sm:w-1/4">
                <div x-show="openFilter"
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="opacity-0 -translate-x-full"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     x-transition:leave="transition ease-in-out duration-300 transform"
                     x-transition:leave-start="opacity-100 translate-x-0"
                     x-transition:leave-end="opacity-0 -translate-x-full"
                     @click.away="openFilter = false"
                     @close-filter.window="openFilter = false"
                     class="fixed top-0 left-0 w-64 h-screen bg-white shadow-lg overflow-y-auto z-50">
                    <div @click="$dispatch('close-filter')"
                            class="w-full p-4 bg-gray-500 text-white font-bold text-base text-left">
                        <i class="fa-solid fa-angle-left"></i>
                        <span class="ml-2">{{__('trans.back')}}</span>
                    </div>
                    <livewire:product.product-filter :categories="$categories"/>
                </div>
                <div class="hidden sm:block">
                    <livewire:product.category-section :categories="$categories"/>
                </div>
            </div>
            <div class="w-full sm:w-3/4 {{Session::get('direction') == 'rtl' ? 'sm:mr-4':'sm:ml-4'}}">
                <div class="relative mb-4 w-full">
                    <input
                        type="text"
                        wire:model.live="search"
                        placeholder="{{ __('trans.product_search_placeholder') }}"
                        class="w-full p-4 text-black text-xs sm:text-sm border border-gray-300 rounded focus-visible:border-primary focus:ring-1 focus:ring-primary focus:outline-none pr-12"/>
                    @if(!empty($search) && preg_match('/[a-zA-Z]/', $search))
                        <button
                            type="button"
                            class="absolute top-1/2 right-4 transform -translate-y-1/2 text-sm text-red-500 hover:text-primary"
                            wire:click="$set('search', '')">
                            {{ __('trans.clear_all') }}
                        </button>
                    @endif


                    <button @click="openFilter = !openFilter"
                            class="block sm:hidden w-full py-2 bg-primary mt-4 text-white font-bold text-base rounded-lg">
                        {{__('trans.f_i_l_t_e_r')}}
                    </button>
                </div>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-4">
                    @foreach($products as $product)
                        <x-product-card :product="$product"
                                        :currency="$currency"
                                        :key="'product-'.$product->id"/>
                    @endforeach
                </div>
                <div>
                    {{ $products->links('pagination::tailwind') }}
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            const swiper_2 = new Swiper(".mySwiper_2", {
                autoplay: {
                    delay: 3000,
                },
                speed: 1000,
            });
        </script>
    </div>
</section>

