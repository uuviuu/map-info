<?php

namespace App\Dto;

use App\Dto\Abstracts\Dto;

class CreateHistoryRequestDto extends Dto
{
    public function __construct(
        public int $user_id,
        public string $text,
    ) {
    }
}
