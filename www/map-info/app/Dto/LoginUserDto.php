<?php

namespace App\Dto;

use App\Dto\Abstracts\Dto;

class LoginUserDto extends Dto
{
    public function __construct(
        public string $email,
        public string $password,
        public ?bool $is_remember = false,
    ) {
    }
}
