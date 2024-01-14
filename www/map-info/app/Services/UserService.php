<?php

namespace App\Services;

use App\Dto\CreateUserDto;
use App\Models\User;
use App\Repositories\UserRepositoryEloquent;

class UserService
{
    public function __construct(
        protected UserRepositoryEloquent $userRepository,
    ) {
    }

    public function createUser(CreateUserDto $dto): User
    {
        return $this->userRepository->firstOrCreate($dto->toArray());
    }
}
