<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\LandingSetting;
use App\Models\Product;
use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $categories;
    public $currency;

    public $selectedCategories = [];
    public $selectedCategory = null;

    public $primary_image;

    public function mount()
    {
        $settings = LandingSetting::whereIn('key', [
            'product_header_image',
        ])->pluck('value', 'key');

        $this->primary_image = LandingSetting::getImageUrl($settings['product_header_image']);

        $this->currency = Setting::where('key', 'currency')->first()->value;
        $this->categories = Category::all();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function showProduct($slug)
    {
        return redirect()->route('product.show', compact('slug'));
    }


    #[On('get-categories')]
    public function getCategories($categoriesArr): void
    {
        $newCategories = array_keys(array_filter($categoriesArr));

        if ($this->selectedCategories !== $newCategories) {
            $this->selectedCategories = $newCategories;
            $this->resetPage();
        }
    }

    public function loadProducts(): \Illuminate\Database\Eloquent\Builder
    {
        $productsQuery = Product::query();

        if (!empty($this->selectedCategories)) {
            $productsQuery->whereIn('category_id', $this->selectedCategories);
        }

        if (!empty($this->search)) {
            $productsQuery->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('slug', 'like', '%' . $this->search . '%')
                    ->orWhere('model', 'like', '%' . $this->search . '%')
                    ->orWhere('brand', 'like', '%' . $this->search . '%')
                    ->orWhere('type', 'like', '%' . $this->search . '%')
                    ->orWhere('condition', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            })->orWhereHas('category', function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        return $productsQuery;
    }

    public function redirectToHome()
    {
        return redirect()->route('home');
    }

    public function redirectToProducts()
    {
        return redirect()->route('products');
    }

    public function render()
    {
        $products = $this->loadProducts()->paginate(6);

        return view('livewire.product.index', [
            'products' => $products,
            'currency' => $this->currency,
            'categories' => $this->categories,
        ])->layout('components.layouts.app');
    }
}
