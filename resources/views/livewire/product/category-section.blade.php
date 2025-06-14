<div>
    <h2 class="text-2xl font-bold bg-primary text-white px-4 py-6">
        {{ __('trans.product_category') }}
    </h2>

    <div class="pt-4">
        @foreach($categories->whereNull('parent_id') as $category)
            @livewire('product.category-item', [
                'category' => $category,
                'selected' => $selectedCategories
            ], key($category->id))
        @endforeach
    </div>
</div>
