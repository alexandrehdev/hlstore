<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductForm extends Component
{
    public ?string $type;

    public ?string $subtype;


    protected $rules = [
        "type" => "required",
        "subtype" => "required"
    ];

    public function check(Request $request)
    {
        $this->type = $request->input('type');
        $this->subtype = $request->input('subtype');

        if(!$this->validate()){

            Log::error("SENDING MULTISTEP REQUEST type $this->type OR subtype $this->subtype ARE EMPTY");

            $this->dispatch("stepResponse", message: "Ocorreu um ERROR, por favor tente novamente :)");
        }
    }

    public function render()
    {
        return view('livewire.product-form');
    }
}
