<?php

namespace App\Livewire\Product;

use App\Models\Category;
use Livewire\Component;

class CategorySection extends Component
{
    public $categories;
    public $selectedCategories = [];

    public function updatedSelectedCategories(): void
    {
        $selectedCategories = $this->selectedCategories;

        $unselectedCategories = array_diff_key($this->previousSelectedCategories ?? [], $selectedCategories);

        // Check if any parent categories were unselected
        foreach ($unselectedCategories as $categoryId => $wasSelected) {
            // If this category is a parent (you'll need your own logic to determine parent/child)
            if ($this->isParentCategory($categoryId)) {
                // Find all child categories of this parent
                $childCategories = $this->getChildCategories($categoryId);

                // Unselect all child categories
                foreach ($childCategories as $childId) {
                    if (isset($selectedCategories[$childId])) {
                        unset($selectedCategories[$childId]);
                    }
                }
            }
        }

        // Update the selected categories
        $this->selectedCategories = $selectedCategories;

        $this->dispatch('get-categories', $this->selectedCategories);
    }

    private function isParentCategory($categoryId): bool
    {
        return Category::where('parent_id', $categoryId)->exists();
    }

    private function getChildCategories($parentId): array
    {
        return Category::where('parent_id', $parentId)->pluck('id')->toArray();
    }

    public function render()
    {
        return view('livewire.product.category-section');
    }
}
