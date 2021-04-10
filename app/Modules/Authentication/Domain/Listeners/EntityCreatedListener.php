<?php

namespace App\Modules\Authentication\Domain\Listeners;

use App\Modules\Authentication\Domain\Actions\RegisterUserAction;
use App\Modules\Authentication\Domain\DataTransferObjects\UserData;
use App\Modules\Entity\Domain\Events\EntityCreatedEvent;

class EntityCreatedListener
{
    private RegisterUserAction $registerUserAction;

    public function __construct(RegisterUserAction $registerUserAction)
    {
        $this->registerUserAction = $registerUserAction;
    }

    public function handle(EntityCreatedEvent $event)
    {
        ($this->registerUserAction)(new UserData([
            'name' => $event->getName(),
            'email' => $event->getEmail(),
            'password' => bcrypt('password')
        ]));
    }
}
