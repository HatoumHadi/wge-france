<div class="block sm:hidden">
    <h2 class="text-lg sm:text-2xl font-bold font-size-header bg-primary text-white px-4 py-6">
        {{ __('trans.product_category') }}
    </h2>

    <div class="p-4 flex flex-col h-[75vh]">
        <div class="flex-1 overflow-y-auto scrollbar-hide">
            @foreach($categories->whereNull('parent_id') as $category)
                <div x-data="{ open: false }" class="group bg-gray-100 p-1 border border-gray-300 mb-3 shadow-sm">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center space-x-2 flex-1">
                            <input
                                type="checkbox"
                                name="filterSelectedCategories.{{ $category->id }}"
                                id="filterSelectedCategories.{{ $category->id }}"
                                value="{{ $category->id }}"
                                wire:model.live="selectedCategories.{{ $category->id }}"
                                class="mr-2">
                            <label for="filterSelectedCategories.{{ $category->id }}"
                                   class="text-sm font-medium flex-1 {{ $selectedCategories[$category->id] ?? false ? 'text-primary' : 'text-gray-700' }}">
                                {{ $category->name }}
                            </label>
                        </div>

                        @if($categories->where('parent_id', $category->id)->isNotEmpty())
                            <button @click="open = !open" class="p-2 -mr-2">
                                <span :class="{ 'rotate-180': open }"
                                      class="transition-transform transform duration-300 text-gray-600 group-hover:text-primary block">▼</span>
                            </button>
                        @endif
                    </div>

                    @if($categories->where('parent_id', $category->id)->isNotEmpty())
                        <div x-show="open" x-transition:enter="transition-all duration-300 ease-in-out"
                             x-transition:leave="transition-all duration-300 ease-in-out"
                             class="ml-6 mt-2 space-y-2 pl-3">
                            @foreach($categories->where('parent_id', $category->id) as $child)
                                <div class="flex items-center space-x-2 pl-2">
                                    <input
                                        type="checkbox"
                                        name="selected_Categories.{{ $child->id }}"
                                        id="selected_Categories.{{ $child->id }}"
                                        value="{{ $child->id }}"
                                        wire:model.live="selectedCategories.{{ $child->id }}"
                                        class="mr-2">
                                    <label for="selected_Categories.{{ $child->id }}"
                                           class="text-sm font-medium {{ $selectedCategories[$child->id] ?? false ? 'text-primary' : 'text-gray-700' }}">
                                        {{ $child->name }}
                                    </label>
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
