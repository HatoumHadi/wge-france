<div x-data="{ isVisible: true, showTooltip: null }" class="z-30 fixed right-0 top-[60%] translate-y-[-50%] h-1/2 hidden sm:block">
    <!-- The toggleable div -->
    <div
        x-show="isVisible"
        x-cloak
        x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition ease-in duration-300 transform"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"
        class="bg-primary py-2 px-4 absolute top-0 right-0 w-12 rounded-bl-xl rounded-tl-xl shadow-lg shadow-gray-600">
        <ul class="flex flex-col justify-center items-center">
            <li class="mt-2 cursor-pointer opacity-100 hover:opacity-75 transition-opacity duration-300"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })">
                <a href="javascript:void(0)" class="focus:outline-none">
                    <i class="fa-solid fa-angle-up text-white text-lg"></i>
                </a>
            </li>
            <li class="mt-4 cursor-pointer opacity-100 relative"
                @mouseenter="showTooltip = 'envelope'" @mouseleave="showTooltip = null">
                <a href="mailto:{{$contact_email_content}}" target="_blank" class="hover:opacity-75 transition-opacity duration-300  focus:outline-none">
                    <i class="fa-solid fa-envelope text-white text-lg"></i>
                </a>
                <!-- Tooltip for Envelope -->
                <div x-show="showTooltip === 'envelope'" x-transition
                     class="absolute right-full mr-4 p-2 bg-white text-black text-sm rounded-md shadow-md w-[150px] top-1/2 transform -translate-y-1/2 hover:text-primary">
                    <a href="mailto:{{$contact_email_content}}" class="block focus:outline-none">
                        {{$contact_email_content}}
                    </a>
                </div>
            </li>
            <li class="mt-4 cursor-pointer opacity-100 relative"
                @mouseenter="showTooltip = 'whatsapp'" @mouseleave="showTooltip = null">
                <a href="https://wa.me/{{ str_replace(' ', '', $contact_section_whatsapp_content) }}?text=Hello" target="_blank" class="hover:opacity-75 transition-opacity duration-300 focus:outline-none">
                    <i class="fa-brands fa-whatsapp text-white bg-green-500 text-lg p-1 rounded-full"></i>
                </a>
                <!-- Tooltip for WhatsApp -->
                <div x-show="showTooltip === 'whatsapp'" x-transition
                     class="absolute right-full mr-4 p-2 bg-white text-black text-sm rounded-md shadow-md w-[150px] top-1/2 transform -translate-y-1/2 hover:text-primary focus:outline-none">
                    <a href="https://wa.me/{{ str_replace(' ', '', $contact_section_whatsapp_content) }}?text=Hello" target="_blank" class="block">
                        {{$contact_section_whatsapp_content}}
                    </a>
                </div>
            </li>
            <li class="mt-4 cursor-pointer relative"
                @mouseenter="showTooltip = 'phone'" @mouseleave="showTooltip = null">
                <a href="tel:{{$contact_telephone_content}}" target="_blank" class="opacity-100 hover:opacity-75 transition-opacity duration-300 focus:outline-none">
                    <i class="fa-solid fa-phone text-white text-lg"></i>
                </a>
                <!-- Tooltip for Phone -->
                <div x-show="showTooltip === 'phone'" x-transition
                     class="absolute right-full mr-4 p-2 bg-white text-black text-sm rounded-md shadow-md w-[150px] top-1/2 transform -translate-y-1/2 hover:text-primary">
                    <a href="tel:{{$contact_telephone_content}}" class="block focus:outline-none">
                        {{$contact_telephone_content}}
                    </a>
                </div>
            </li>
            <li class="mt-4 mb-1 cursor-pointer opacity-100 hover:opacity-75 transition-opacity duration-300"
                @click="window.scrollTo({ top: document.documentElement.scrollHeight, behavior: 'smooth' })">
                <a href="javascript:void(0)" class="focus:outline-none">
                    <i class="fa-solid fa-angle-down text-white text-lg"></i>
                </a>
            </li>
        </ul>
    </div>
    <div
        @click="isVisible = !isVisible"
        class="absolute right-0 top-[70%] translate-y-[-50%] bg-primary py-4 px-4 text-center cursor-pointer w-12 opacity-100 hover:opacity-75 transition-opacity duration-300 rounded-bl-xl rounded-tl-xl shadow-lg shadow-gray-600">
        <template x-if="isVisible">
            <i class="fa-solid fa-angle-right text-white text-lg"></i>
        </template>
        <template x-if="!isVisible">
            <i class="fa-solid fa-angle-left text-white text-lg"></i>
        </template>
    </div>
</div>
