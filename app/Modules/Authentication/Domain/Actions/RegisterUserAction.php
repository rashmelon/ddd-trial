<?php

namespace App\Modules\Authentication\Domain\Actions;

use App\Modules\Authentication\Domain\DataTransferObjects\UserData;

class RegisterUserAction
{
    private CreateUserAction $createUserAction;

    private NotifyUserCreatedAction $notifyUserCreatedAction;

    public function __construct(CreateUserAction $createUserAction, NotifyUserCreatedAction $notifyUserCreatedAction)
    {
        $this->createUserAction = $createUserAction;
        $this->notifyUserCreatedAction = $notifyUserCreatedAction;
    }

    public function __invoke(UserData $data)
    {
        $user = ($this->createUserAction)($data);

        ($this->notifyUserCreatedAction)($user);
    }
}
