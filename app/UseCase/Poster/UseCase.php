<?php

namespace App\UseCase\Poster;
use App\UseCase\Poster\Input;
use App\Models\Poster;
class UseCase{
    
    public function handle(Input $input)
    {
        $banner = new Poster();
        $banner->path = $input->path;
        $banner->product_id = $input->product_id;
        $banner->save();
    }

}