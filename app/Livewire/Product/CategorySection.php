<?php

namespace App\Livewire\Product;

use Livewire\Component;

class CategorySection extends Component
{
    public $categories;
    public $selectedCategories = [];

    public function updatedSelectedCategories(): void
    {
        $this->dispatch('get-categories', $this->selectedCategories);
    }

    public function render()
    {
        return view('livewire.product.category-section');
    }
}
