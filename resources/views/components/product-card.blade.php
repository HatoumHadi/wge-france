<div>
    <div
        class="bg-white shadow-lg overflow-hidden transform transition-transform sm:hover:scale-105 flex flex-col">
        <!-- Swiper Section -->
        <div class="swiper_2 mySwiper_2">
            <div class="swiper-wrapper">
                @foreach(json_decode($product->images, true) as $index => $image)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}"
                             class="w-full max-h-[200px] h-[50vh] object-cover">
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Product Details -->
        <div wire:click="showProduct('{{ $product->slug }}')"
             class="p-2 flex flex-col flex-grow cursor-pointer">
            <h2 class="text-lg font-semibold text-primary text-center">{{ $product->name }}</h2>
            <p class="text-gray-700 mt-4 text-sm text-center line-clamp-2">{{ $product->description }}</p>
            <p class="text-base font-bold text-black mt-2 text-center">{{__('trans.product_price')}}: {{ $product->price }} {{$currency}}</p>
        </div>

        <!-- Button Section -->
        <div wire:click="showProduct('{{ $product->slug }}')"
             class="p-4 mt-auto flex justify-center cursor-pointer">
                            <span
                                class="text-sm w-1/2 py-2 px-6 font-bold text-white bg-primary rounded transition duration-300 ease-in-out hover:bg-white hover:text-primary hover:border-primary border focus:outline-none focus:ring focus:ring-primary focus:ring-opacity-50 text-center">
                             {{__('trans.view_details')}}
                            </span>
        </div>

    </div>
</div>
