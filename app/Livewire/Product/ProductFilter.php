<?php

namespace App\Livewire\Product;

use Livewire\Component;

class ProductFilter extends Component
{
    public $categories;
    public $selectedCategories = [];


    public function updatedSelectedCategories(): void
    {
        $this->dispatch('get-categories', $this->selectedCategories);
    }

    public function resetCategories(): void
    {
        $this->selectedCategories = [];
    }

    public function render()
    {
        return view('livewire.product.product-filter');
    }
}
