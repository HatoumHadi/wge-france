<div class="pl-4 border-l border-gray-300 space-y-1">
    <div class="flex items-center space-x-2">
        @if($category->children->count())
            <button type="button"
                    wire:click="toggleOpen"
                    class="text-gray-600 hover:text-primary"
                    style="transform: rotate({{ $open ? 180 : 0 }}deg); transition: transform 0.2s;">
                ▼
            </button>
        @else
            <span style="width: 1rem;"></span>
        @endif

        <input
            type="checkbox"
            id="category-{{ $category->id }}"
            wire:click="toggleCategory({{ $category->id }})"
            @checked($selected[$category->id] ?? false)
            class="form-checkbox text-orange-500"
        x-data
        x-init="$el.indeterminate = @js($this->isIndeterminate($category))"
        >

        <label for="category-{{ $category->id }}" class="text-sm text-black">
            {{ $category->name }}
        </label>
    </div>

    @if($open)
        <div class="ml-4 mt-1 space-y-1">
            @foreach($category->children as $child)
                @livewire('product.category-item', [
                    'category' => $child,
                    'selected' => $selected
                ], key($child->id))
            @endforeach
        </div>
    @endif
</div>
