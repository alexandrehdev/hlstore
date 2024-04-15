<?php
namespace App\UseCase\Banner;

class Input{

    /**
     * Undocumented function
     *
     * @param string $banner_path
     */
    public function __construct(
        public string $banner_path
    ){}
}