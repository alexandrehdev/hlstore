<?php

namespace App\UseCase\Poster;
use App\UseCase\Poster\Input;
use App\Models\Poster;
class UseCase{
    
    public function handle(Input $input)
    {

        $poster = new Poster();
        $poster->path = $input->path;
        $poster->product_id = $input->product_id;
        $poster->save();
    }

}