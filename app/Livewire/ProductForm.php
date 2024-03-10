<?php

namespace App\Livewire;

use Livewire\Component;

class ProductForm extends Component
{
    public $teste;

    protected $listeners = ["getsubtype" => "tchurusbango"];

    public function tchurusbango()
    {
        $this->teste = "asd";
    }

    public function render()
    {
        return view('livewire.product-form');
    }
}
