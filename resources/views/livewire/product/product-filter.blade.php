<div class="block sm:hidden">
    <h2 class="text-lg sm:text-2xl font-bold font-size-header bg-primary text-white px-4 py-6">
        {{ __('trans.product_category') }}
    </h2>

    <div class="p-4 flex flex-col h-[75vh]">
        <div class="flex-1 overflow-y-auto scrollbar-hide">
            @foreach($categories->whereNull('parent_id') as $category)
                @php
                    $hasChildren = $categories->where('parent_id', $category->id)->isNotEmpty();
                @endphp

                <div x-data="{ isOpen: false }" class="group p-1 mb-3 shadow-sm rounded">
                    <div class="flex justify-between items-center cursor-pointer p-2 rounded">
                        <div class="flex items-center space-x-2 flex-grow"
                             @click="$wire.toggleCheck('{{ $category->id }}')">
                            @if($hasChildren)
                                <button
                                    @click.stop="isOpen = !isOpen"
                                    class="transition-transform duration-300 text-gray-600 hover:text-primary cursor-pointer"
                                    :class="{ 'rotate-180': isOpen }">
                                    ▼
                                </button>
                            @else
                                <div class="w-4"></div>
                            @endif
                            <input
                                type="checkbox"
                                name="selectedCategories.{{ $category->id }}"
                                id="selectedCategories.{{ $category->id }}"
                                value="{{ $category->id }}"
                                wire:model.live="selectedCategories.{{ $category->id }}"
                                class="hidden">
                            <div class="w-4 h-4 border border-gray-400 rounded-sm flex items-center justify-center cursor-pointer"
                                 :class="{ 'bg-primary border-primary': $wire.selectedCategories['{{ $category->id }}'] ?? false }">
                                <svg x-show="$wire.selectedCategories['{{ $category->id }}'] ?? false"
                                     class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <label for="selectedCategories.{{ $category->id }}"
                                   class="text-sm font-medium flex-grow {{ $selectedCategories[$category->id] ?? false ? 'text-primary' : 'text-gray-700' }} cursor-pointer">
                                {{ $category->name }}
                            </label>
                        </div>
                    </div>

                    @if($hasChildren)
                        <div x-show="isOpen"
                             x-transition:enter="transition-all duration-300 ease-in-out"
                             x-transition:leave="transition-all duration-300 ease-in-out"
                             class="ml-6 mt-1 space-y-1 border-l border-gray-300 pl-3">
                            @foreach($categories->where('parent_id', $category->id) as $child)
                                @php
                                    $hasGrandChildren = $categories->where('parent_id', $child->id)->isNotEmpty();
                                @endphp

                                <div x-data="{ isChildOpen: false }" class="group">
                                    <div class="flex justify-between items-center p-1 rounded">
                                        <div class="flex items-center space-x-2 flex-grow"
                                             @click="$wire.toggleCheck('{{ $child->id }}')">
                                            <input
                                                type="checkbox"
                                                name="selectedCategories.{{ $child->id }}"
                                                id="selectedCategories.{{ $child->id }}"
                                                value="{{ $child->id }}"
                                                wire:model.live="selectedCategories.{{ $child->id }}"
                                                class="hidden">
                                            <div class="w-4 h-4 border border-gray-400 rounded-sm flex items-center justify-center cursor-pointer"
                                                 :class="{ 'bg-primary border-primary': $wire.selectedCategories['{{ $child->id }}'] ?? false }">
                                                <svg x-show="$wire.selectedCategories['{{ $child->id }}'] ?? false"
                                                     class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <label for="selectedCategories.{{ $child->id }}"
                                                   class="text-sm font-medium flex-grow {{ $selectedCategories[$child->id] ?? false ? 'text-primary' : 'text-gray-700' }} cursor-pointer">
                                                {{ $child->name }}
                                            </label>
                                        </div>

                                        @if($hasGrandChildren)
                                            <button
                                                @click.stop="isChildOpen = !isChildOpen"
                                                class="transition-transform duration-300 text-gray-600 hover:text-primary ml-2 cursor-pointer"
                                                :class="{ 'rotate-180': isChildOpen }"
                                            >
                                                ▼
                                            </button>
                                        @endif
                                    </div>

                                    @if($hasGrandChildren)
                                        <div x-show="isChildOpen"
                                             x-transition:enter="transition-all duration-300 ease-in-out"
                                             x-transition:leave="transition-all duration-300 ease-in-out"
                                             class="ml-6 mt-1 space-y-1 border-l border-gray-300 pl-3">
                                            @foreach($categories->where('parent_id', $child->id) as $grandChild)
                                                <div class="flex items-center space-x-2 pl-2 p-1 rounded"
                                                     @click="$wire.toggleCheck('{{ $grandChild->id }}')">
                                                    <input
                                                        type="checkbox"
                                                        name="selectedCategories.{{ $grandChild->id }}"
                                                        id="selectedCategories.{{ $grandChild->id }}"
                                                        value="{{ $grandChild->id }}"
                                                        wire:model.live="selectedCategories.{{ $grandChild->id }}"
                                                        class="hidden">
                                                    <div class="w-4 h-4 border border-gray-400 rounded-sm flex items-center justify-center cursor-pointer"
                                                         :class="{ 'bg-primary border-primary': $wire.selectedCategories['{{ $grandChild->id }}'] ?? false }">
                                                        <svg x-show="$wire.selectedCategories['{{ $grandChild->id }}'] ?? false"
                                                             class="w-3 h-3 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    </div>
                                                    <label for="selectedCategories.{{ $grandChild->id }}"
                                                           class="text-sm font-medium flex-grow {{ $selectedCategories[$grandChild->id] ?? false ? 'text-primary' : 'text-gray-700' }} cursor-pointer">
                                                        {{ $grandChild->name }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            <button @click="$dispatch('close-filter')"
                    class="w-full py-2 bg-primary mt-4 text-white font-bold text-base rounded-lg">
                {{__('trans.apply_filter')}}
            </button>

            <button wire:click="resetCategories()"
                    @click.prevent="$dispatch('close-filter')"
                    class="w-full py-2 bg-gray-900 mt-4 text-white font-bold text-base rounded-lg">
                {{ __('trans.reset_filter') }}
            </button>
        </div>
    </div>
</div>
