<?php

namespace App\Modules\Entity\Domain\Actions;

use App\Modules\Entity\Domain\Events\EntityCreatedEvent;
use App\Modules\Entity\Domain\Models\Entity;

class TriggerEntityCreatedEvent
{
    public function __invoke(Entity $entity)
    {
        event(new EntityCreatedEvent($entity));
    }
}
