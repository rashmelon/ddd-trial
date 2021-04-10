<?php

namespace App\Modules\Authentication\Domain\Actions;

use App\Modules\Authentication\App\Notifications\UserRegisterdNotification;
use App\Modules\Authentication\Domain\Models\User;

class NotifyUserCreatedAction
{
    public function __invoke(User $user)
    {
        $user->notify(new UserRegisterdNotification());
    }
}
