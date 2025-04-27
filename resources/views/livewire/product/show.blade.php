<section>
    <div class="p-4 flex justify-center bg-gray-200 mt-14 sm:mt-16">
        <div class="w-full sm:w-4/5">
            <div class="flex items-center sm:mx-4">
                <i class="fa-solid fa-house text-primary"></i>
                <div wire:click="{{route('home')}}" class="cursor-pointer">
                    <p class="ml-2 text-gray-500 text-xs sm:text-base">{{ __('trans.home') }}</p>
                </div>
                <i class="fa-solid fa-arrow-right text-primary ml-2"></i>
                <div wire:click="{{route('products')}}" class="cursor-pointer">
                    <p class="ml-2 text-gray-500 text-xs sm:text-base">Products</p>
                </div>
                <i class="fa-solid fa-arrow-right text-primary ml-2"></i>
                <p class="ml-2 text-gray-500 text-xs sm:text-base">{{$product->category->name}}</p>
                <i class="fa-solid fa-arrow-right text-primary ml-2"></i>
                <p class="ml-2 text-xs sm:text-base">{{$product->name}}</p>
            </div>
        </div>
    </div>


    <div class="sm:px-16 px-4">
        <div class="flex justify-center">
            <div class="w-full flex flex-col justify-center items-center">
                <div class="p-2 sm:p-12 flex flex-col sm:flex-row justify-center w-full">
                    <div class="bg-white shadow-lg overflow-hidden sm:w-1/2 w-full">

                        <div class="swiper_2 mySwiper_2">
                            <div class="swiper-wrapper">
                                @foreach(json_decode($product->images, true) as $index => $image)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}"
                                             class="w-full h-72 object-cover gallery-image cursor-pointer">
                                    </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-prev custom-swiper-button-prev"></div>
                            <div class="swiper-button-next custom-swiper-button-next"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper swiper-wrapper-height-gallery m-2">
                            <div class="swiper-wrapper">
                                @foreach(json_decode($product->images, true) as $index => $image)
                                    <div class="swiper-slide cursor-pointer">
                                        <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}"
                                             class="">
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="sm:w-1/2 w-full {{ app()->getLocale() == 'ar' ? 'mr-4' : 'ml-4' }} mt-8">
                        <h2 class="text-2xl font-semibold text-primary">{{ $product->name }}</h2>
                        <p class="text-gray-700 mt-4">{{ $product->description }}</p>
                    </div>
                </div>


                <!-- Product Information Section -->
                <div class="sm:p-12 flex flex-col justify-between w-full mt-12 sm:mt-0">
                    <div class="text-center font-bold text-black mb-8 text-2xl">
                        <p>{{__('trans.product_information')}}</p>
                    </div>
                    <div class="overflow-hidden bg-white shadow-lg rounded-lg">
                        <table class="table-auto w-full border-collapse">
                            <tbody>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_model')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->model }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_brand')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->brand }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_type')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->type }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_speed')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->speed }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_resolution')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->resolution }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_max_print_size')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->max_print_size }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_color_capability')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->color_capability }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_duplex')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->duplex }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_connectivity')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->connectivity }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_condition')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->condition }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_stock_quantity')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->stock_quantity }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_warranty')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->warranty }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-semibold text-gray-800 py-2 px-4">{{__('trans.product_manufacture_year')}}</td>
                                <td class="text-gray-700 py-2 px-4">{{ $product->manufacture_year }}</td>
                            </tr>
                            <tr class="border-b text-center">
                                <td class="font-bold text-gray-800 py-2 px-4">{{__('trans.product_price')}} ({{$currency}})</td>
                                <td class="font-bold text-gray-700 py-2 px-4">{{ $product->price }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- Related Product -->
                <div class="p-12 mb-8">
                    <h2 class="text-2xl font-bold text-primary text-center mb-4">{{__('trans.related_products')}}</h2>
                    @if(count($relatedProducts) == 0)
                        <div>
                            <p class="text-center text-gray-500">{{__('trans.no_related_products')}}</p>
                        </div>
                    @else
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            @foreach($relatedProducts as $relatedProduct)
                                <x-product-card :product="$relatedProduct"
                                                :key="'related-product-'.$relatedProduct->id"/>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
                const swiper = new Swiper(".mySwiper", {
                    spaceBetween: 10,
                    slidesPerView: 4,
                    freeMode: true,
                    watchSlidesProgress: true,
                });

                const swiper_2 = new Swiper(".mySwiper_2", {
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    autoplay: {
                        delay: 3000,
                    },
                    speed: 1000,
                    thumbs: {
                        swiper: swiper,
                    },
                });


                //

                // Fullscreen functionality
                let currentIndex = 0;
                const images = Array.from(document.querySelectorAll(".gallery-image"));

                document.addEventListener("click", function (event) {
                    const target = event.target;
                    if (target.classList.contains("gallery-image")) {
                        currentIndex = images.indexOf(target);

                        // Create fullscreen overlay
                        const overlay = document.createElement("div");
                        overlay.classList.add("fullscreen-overlay");

                        // Create fullscreen image
                        const clonedImage = target.cloneNode(true);
                        clonedImage.classList.add("fullscreen-image");

                        // Add buttons
                        const downloadButton = document.createElement("a");
                        downloadButton.innerHTML = '<i class="fas fa-download"></i>'; // FontAwesome download icon
                        downloadButton.href = target.src;
                        downloadButton.classList.add("fullscreen-download");

                        const cancelButton = document.createElement("button");
                        cancelButton.innerText = "×";
                        cancelButton.classList.add("fullscreen-cancel");

                        const leftButton = document.createElement("button");
                        leftButton.innerText = "←";
                        leftButton.classList.add("fullscreen-left");

                        const rightButton = document.createElement("button");
                        rightButton.innerText = "→";
                        rightButton.classList.add("fullscreen-right");

                        // Append elements
                        overlay.append(downloadButton, cancelButton, clonedImage, leftButton, rightButton);
                        document.body.appendChild(overlay);

                        // Event listeners
                        cancelButton.addEventListener("click", () => document.body.removeChild(overlay));

                        leftButton.addEventListener("click", () => navigateFullscreen(-1, overlay));
                        rightButton.addEventListener("click", () => navigateFullscreen(1, overlay));
                    }
                });

                function navigateFullscreen(direction, overlay) {
                    currentIndex = (currentIndex + direction + images.length) % images.length;

                    // Get the new image source and replace the old image in the overlay
                    const newImage = images[currentIndex];
                    const newImageSrc = newImage.src;

                    // Update the image in the fullscreen overlay
                    const newImageElement = document.createElement("img");
                    newImageElement.src = newImageSrc;
                    newImageElement.classList.add("fullscreen-image");

                    overlay.querySelector(".fullscreen-image").replaceWith(newImageElement);
                    overlay.querySelector(".fullscreen-download").href = newImageSrc;
                }

                //
            </script>


            <!-- Custom CSS -->
            <style>
                .swiper_2 {
                    position: relative;
                }

                .swiper-button-prev,
                .swiper-button-next {
                    position: absolute;
                    top: 55%;
                    transform: translateY(-50%);
                    z-index: 10;
                    width: 40px;
                    height: 40px;
                    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
                    color: #fff; /* White color for icons */
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                }

                .swiper-button-prev {
                    left: 10px; /* Adjust distance from the left edge */
                }

                .swiper-button-next {
                    right: 10px; /* Adjust distance from the right edge */
                }

                .swiper-button-prev::after,
                .swiper-button-next::after {
                    font-size: 18px;
                    font-weight: bold;
                }

                .swiper-wrapper-height-gallery {
                    height: 100px !important;
                }
            </style>
        </div>
</section>




