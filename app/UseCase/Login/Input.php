<?php

namespace App\UseCase\Login;
class Input
{
    /**
     * Undocumented function
     *
     * @param string $email
     * @param string $password
     */
    public function __construct(
        public string $email,
        public string $password,
    ){}
}