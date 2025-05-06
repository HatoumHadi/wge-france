<div class="">
<h2 class="text-2xl font-bold bg-primary text-white px-4 py-6">
        {{ __('trans.product_category') }}
    </h2>

    <div class="p-4">
        @foreach($categories->whereNull('parent_id') as $category)
            <div x-data="{ open: false }" class="group bg-gray-100 p-4 border border-gray-300 mb-3 shadow-sm">
                <div class="group flex justify-between items-center cursor-pointer transition-colors duration-200 p-2"
                     @click="open = !open">
                    <div class="flex items-center space-x-2">
                        <input
                            type="checkbox"
                            name="selectedCategories.{{ $category->id }}"
                            id="selectedCategories.{{ $category->id }}"
                            value="{{ $category->id }}"
                            wire:model.live="selectedCategories.{{ $category->id }}"
                            x-ref="checkbox"
                            @click="if ($event.target !== $refs.checkbox) { open = !open }">
                        <label for="selectedCategories.{{ $category->id }}"
                               class="text-sm font-medium {{ $selectedCategories[$category->id] ?? false ? 'text-primary' : 'text-gray-700' }}"
                               @click="open = !open">
                            {{ $category->name }}
                        </label>
                    </div>

                    @if($categories->where('parent_id', $category->id)->isNotEmpty())
                        <span :class="{ 'rotate-180': open }"
                              class="transition-transform duration-300 text-gray-600 group-hover:text-primary">▼</span>
                    @endif
                </div>

                @if($categories->where('parent_id', $category->id)->isNotEmpty())
                    <div x-show="open" x-transition:enter="transition-all duration-300 ease-in-out"
                         x-transition:leave="transition-all duration-300 ease-in-out"
                         class="ml-4 mt-2 space-y-2 border-l border-gray-300 pl-3">
                        @foreach($categories->where('parent_id', $category->id) as $child)
                            <div class="flex items-center space-x-2">
                                <input
                                    type="checkbox"
                                    name="selectedCategories.{{ $child->id }}"
                                    id="selectedCategories.{{ $child->id }}"
                                    value="{{ $child->id }}"
                                    wire:model.live="selectedCategories.{{ $child->id }}"
                                    @click="open = !open">
                                <label for="selectedCategories.{{ $child->id }}"
                                       class="text-sm font-medium {{ $selectedCategories[$child->id] ?? false ? 'text-primary' : 'text-gray-700' }}"
                                       @click="open = !open">
                                    {{ $child->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
