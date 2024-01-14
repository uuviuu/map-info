<?php

namespace App\Dto;

use App\Dto\Abstracts\Dto;
use Illuminate\Support\Facades\Hash;

class CreateUserDto extends Dto
{
    public function __construct(
        public string $name,
        public string $email,
        public string $password,
    ) {
        $this->password = Hash::make($this->password);
    }
}
