<?php

namespace App\Livewire;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\UseCase\Poster\UseCase as UploadPoster;
use App\UseCase\Poster\Input as PosterInput;
use Illuminate\Support\Facades\Storage;


class DropzonePoster extends Component
{   
    public string $message = "";

    public Product $product;


    
    public function upload(Request $request, UploadPoster $uploadBanner) :void
    {
        Log::info($this->product);

        // if(!$request->hasFile('file')){
        //     $this->message = "Ocorreu um error, tente novamente.";
        // }        

        // $path = Storage::putFile(
        //     "public/banners",
        //     $request->file('file'),
        //     'public'
        // );

        // $banner_input = new PosterInput(
        //     $path,
        //     $this->product->id
        // );

        // $uploadBanner->handle($banner_input);
        

        $this->message = "Banner Adicionado com Sucesso.";
    }

    public function render()
    {
        return view('livewire.dropzone-poster');
    }
}
