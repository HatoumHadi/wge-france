<?php

namespace App\Livewire\Product;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class CategorySection extends Component
{
    public $categories;
    public $selectedCategories = [];

    public function mount()
    {
        $this->categories = Category::with('children')->get();
    }

    #[On('child-updated-categories')]
    public function updateFromChild(array $updatedIds): void
    {
        // Merge selected IDs
        foreach ($updatedIds as $id => $selected) {
            if ($selected) {
                $this->selectedCategories[$id] = true;
            } else {
                unset($this->selectedCategories[$id]);
            }
        }

        $this->dispatch('get-categories', $this->selectedCategories);
    }

    public function render()
    {
        return view('livewire.product.category-section');
    }
}
