<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class DropzoneBanner extends Component
{   
    
    public function upload(Request $request)
    {
        
    }

    public function render()
    {
        return view('livewire.dropzone-banner');
    }
}
