<?php

namespace App\Modules\Authentication\Domain\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function store(): bool
    {
        return true;
    }
}
