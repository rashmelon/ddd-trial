<?php

namespace App\Modules\Authentication\Domain\Actions;

use App\Modules\Authentication\Domain\DataTransferObjects\UserData;
use App\Modules\Authentication\Domain\Models\User;

class CreateUserAction
{
    public function __invoke(UserData $data): User
    {
        return User::create($data->toArray());
    }
}
