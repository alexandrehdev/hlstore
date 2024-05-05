<?php

namespace App\UseCase\Poster;
use App\UseCase\Poster\Input;
use App\Models\Poster;
use Illuminate\Support\Facades\Storage;

class UseCase{
    
    public function handle(Input $input)
    {
        foreach($input->data as $poster)
        {
            $path = Storage::putFile(
                "/public/posters", 
               $poster,
             "public"
            );
           
            $poster = new Poster();
            $poster->path = $path;
            $poster->product_id = $input->product_id;
            $poster->save();
        }
    }

}   