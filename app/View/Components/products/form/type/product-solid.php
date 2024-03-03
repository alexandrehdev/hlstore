<?php

namespace App\View\Components\products\form\type;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class product-solid extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.form.type.product-solid');
    }
}
