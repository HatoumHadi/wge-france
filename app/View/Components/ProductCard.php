<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    public $product;
    public $currency;


    /**
     * Create a new component instance.
     */
    public function __construct($product, $currency)
    {
        $this->product = $product;
        $this->currency = $currency;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
