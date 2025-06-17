<div class="pl-4 border-l border-gray-300 space-y-1"
     :class="{ 'pr-4 border-r border-l-0': '{{ app()->getLocale() }}' === 'ar' }">

    <div x-data
         x-init="$refs.checkbox.indeterminate = {{ $this->isIndeterminate($category) ? 'true' : 'false' }}"
         class="flex items-center space-x-3 mt-1"
         :class="{ 'space-x-reverse': '{{ app()->getLocale() }}' === 'ar' }">

        <div class="w-4 h-4 flex items-center justify-center">
            @if($category->children->count())
                <button type="button"
                        wire:click="toggleOpen"
                        class="text-gray-600 hover:text-primary transform transition-transform duration-200 select-none"
                        :class="{ 'rotate-180': {{ $open ? 'true' : 'false' }} }">
                    ▼
                </button>
            @else
                <span class="inline-block w-4 h-4"></span>
            @endif
        </div>

        <input
            x-ref="checkbox"
            type="checkbox"
            id="category-{{ $category->id }}"
            wire:click="toggleCategory({{ $category->id }})"
            @checked($selected[$category->id] ?? false)
            class="form-checkbox text-orange-500 rounded border-gray-400 focus:ring-primary"
        >

        <label for="category-{{ $category->id }}" class="text-sm text-black select-none">
            {{ $category->name }}
        </label>
    </div>

    @if($open)
        <div class="ml-4 mt-1 space-y-1" :class="{ 'mr-4 ml-0': '{{ app()->getLocale() }}' === 'ar' }">
            @foreach($category->children as $child)
                @livewire('product.category-item', [
                    'category' => $child,
                    'selected' => $selected
                ], key($child->id))
            @endforeach
        </div>
    @endif
</div>
