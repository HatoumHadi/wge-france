<?php

namespace App\Livewire\Product;

use App\Models\LandingSetting;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Support\Str;
use Livewire\Component;

class Show extends Component
{
    public $product;
    public $relatedProducts;
    public $currency;

    public function mount($slug)
    {
        $this->product = Product::whereSlug($slug)->firstOrFail();
        $this->relatedProducts = Product::where('category_id', $this->product->category_id)->where('id', '!=', $this->product->id)->get();
        $this->currency = Setting::where('key', 'currency')->first()->value;
    }

    public function render()
    {
        return view('livewire.product.show', [
            'product' => $this->product,
            'currency' => $this->currency
        ])->layout('components.layouts.app');
    }
}
