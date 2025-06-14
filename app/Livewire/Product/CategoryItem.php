<?php

namespace App\Livewire\Product;

use Livewire\Component;

class CategoryItem extends Component
{
    public $category;
    public $selected = [];
    public $open = false;

    public function mount($category, $selected)
    {
        $this->category = $category;
        $this->selected = $selected;
    }

    public function toggleCategory($id)
    {
        if (isset($this->selected[$id]) && $this->selected[$id]) {
            unset($this->selected[$id]);
        } else {
            $this->selected[$id] = true;
        }

        $this->emitUpdate($id, $this->selected[$id] ?? false);
    }

    public function isChecked($id)
    {
        return $this->selected[$id] ?? false;
    }

    public function isIndeterminate($category)
    {
        if ($category->children->isEmpty()) return false;

        $total = $category->children->count();
        $selected = $category->children->filter(fn($c) => $this->isChecked($c->id))->count();

        return $selected > 0 && $selected < $total;
    }

    public function toggleOpen()
    {
        $this->open = !$this->open;
    }

    public function emitUpdate($id, $isSelected)
    {
        $this->dispatch('child-updated-categories', [$id => $isSelected]);
    }

    public function render()
    {
        return view('livewire.product.category-item');
    }
}
