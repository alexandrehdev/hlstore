<?php

namespace App\UseCase\Register;

class Input
{
    /**
     * @property string $username
     * @property string $email
     * @property string $password
     */
    
    public function __construct(
        public string $username,
        public string $email,
        public string $password
    ){}
}
