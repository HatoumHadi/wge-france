<div>
    <section id="about">
        <div class="relative w-full h-[400px] mt-[73px]">
            <img src="{{ asset('storage/'.$about_header_image) }}" class="w-full h-full object-cover" alt="points">

            <div class="absolute inset-0 flex items-center justify-center text-center bg-black/50">
                <div class="text-white">
                    <h2 class="mb-3 text-3xl font-bold leading-[1.2] sm:text-4xl md:text-[40px] text-primary">
                        {{$about_primary_title}}
                    </h2>
                    <span class="mb-2 block text-2xl font-size-header font-semibold">
             {{$about_secondary_title}}
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
                    <p class="ml-2">{{$about_primary_title}}</p>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="w-3/4 mt-12" data-wow-delay=".2s">
                <div class="flex flex-wrap">
                    <div class="w-full sm:px-4 sm:w-1/2">
                        <div class="mb-12 lg:mb-0 h-full">
                            <p class="sm:mt-12 leading-relaxed font-size-content text-body-color dark:text-dark-6 text-center sm:text-left">
                                {!! $about_description !!}
                            </p>
                        </div>
                    </div>

                    <div class="w-full sm:px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="relative h-[50vh] w-full rounded-lg overflow-hidden">
                                    <video id="aboutVideo" muted playsinline autoplay loop
                                           class="h-full w-full object-cover rounded-lg">
                                        <source src="{{ asset('storage/'.$about_video) }}" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center h-screen">
            <div class="bg-primary h-[55%] w-full flex flex-col justify-center pl-8 pr-8">
                <div class="flex justify-center items-center">
                    <h2 class="mt-8 text-3xl font-bold font-size-header text-white sm:text-[40px] sm:leading-[1.2]">
                        {{$about_work_shop_title}}
                    </h2>
                </div>

                <!-- Swiper Gallery -->
                <div class="swiper mySwiper2 mt-8 mb-8">
                    <div class="swiper-wrapper">
                        @foreach($about_work_shop_images as $image)
                            <div class="swiper-slide cursor-pointer">
                                <img src="{{ asset('storage/'.$image) }}" alt="" class="rounded-lg gallery-image">
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper_2 = new Swiper(".mySwiper2", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
            },
            speed: 500,
            loop: true,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                }
            }
        });

        // Fullscreen functionality
        let currentIndex = 0;
        let currentOverlay = null;
        const images = Array.from(document.querySelectorAll(".gallery-image"));

        document.addEventListener("click", function (event) {
            const target = event.target;
            if (target.classList.contains("gallery-image")) {
                openFullscreen(target);
            }
        });

        function openFullscreen(target) {
            currentIndex = images.indexOf(target);

            // Create fullscreen overlay
            const overlay = document.createElement("div");
            overlay.classList.add("fullscreen-overlay");
            currentOverlay = overlay;

            // Create fullscreen image
            const clonedImage = target.cloneNode(true);
            clonedImage.classList.add("fullscreen-image");

            // Add buttons
            const downloadButton = document.createElement("a");
            downloadButton.innerHTML = '<i class="fas fa-download"></i>';
            downloadButton.href = target.src.startsWith('http') ? target.src : window.location.origin + target.src;
            downloadButton.setAttribute('download', '');
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
            document.body.style.overflow = 'hidden'; // Prevent scrolling when overlay is open

            // Event listeners
            cancelButton.addEventListener("click", closeFullscreen);
            leftButton.addEventListener("click", () => navigateFullscreen(-1));
            rightButton.addEventListener("click", () => navigateFullscreen(1));

            // Add keyboard event listeners
            document.addEventListener('keydown', handleKeyDown);
        }

        function closeFullscreen() {
            if (currentOverlay) {
                document.body.removeChild(currentOverlay);
                document.body.style.overflow = ''; // Re-enable scrolling
                currentOverlay = null;

                // Remove keyboard event listener
                document.removeEventListener('keydown', handleKeyDown);
            }
        }

        function navigateFullscreen(direction) {
            if (!currentOverlay) return;

            currentIndex = (currentIndex + direction + images.length) % images.length;
            const newImage = images[currentIndex];
            const newImageSrc = newImage.src;

            // Update the image in the fullscreen overlay
            const imgElement = currentOverlay.querySelector(".fullscreen-image");
            imgElement.src = newImageSrc;

            // Update download link
            currentOverlay.querySelector(".fullscreen-download").href = newImageSrc;
        }

        function handleKeyDown(event) {
            if (!currentOverlay) return;

            switch(event.key) {
                case 'Escape':
                    closeFullscreen();
                    break;
                case 'ArrowLeft':
                    navigateFullscreen(-1);
                    break;
                case 'ArrowRight':
                    navigateFullscreen(1);
                    break;
            }
        }
    </script>
</div>
