<?php

namespace App\Livewire\Product;

use Livewire\Component;

class ProductFilter extends Component
{
    public $categories;
    public $selectedCategories = [];

    public function updatedSelectedCategories($value, $key)
    {
        $categoryId = str_replace('selectedCategories.', '', $key);

        // If checking a category, ensure all its children are checked
        if ($value) {
            $this->checkAllChildren($categoryId);
        }
        // If unchecking a category, ensure all its parents are unchecked
        else {
            $this->uncheckParentCategories($categoryId);
        }

        $this->dispatch('get-categories', $this->selectedCategories);
    }

    protected function checkAllChildren($categoryId)
    {
        $children = $this->categories->where('parent_id', $categoryId);
        foreach ($children as $child) {
            $this->selectedCategories[$child->id] = true;
            $this->checkAllChildren($child->id);
        }
    }

    protected function uncheckParentCategories($categoryId)
    {
        $current = $this->categories->firstWhere('id', $categoryId);
        while ($current && $current->parent_id) {
            $current = $this->categories->firstWhere('id', $current->parent_id);
            if ($current) {
                $this->selectedCategories[$current->id] = false;
            }
        }
    }

    public function toggleCheck($categoryId)
    {
        $this->selectedCategories[$categoryId] = !($this->selectedCategories[$categoryId] ?? false);
        $this->updatedSelectedCategories($this->selectedCategories[$categoryId], "selectedCategories.$categoryId");
    }

    public function resetCategories()
    {
        $this->selectedCategories = [];
        $this->dispatch('get-categories', $this->selectedCategories);
    }

    public function render()
    {
        return view('livewire.product.product-filter');
    }
}
