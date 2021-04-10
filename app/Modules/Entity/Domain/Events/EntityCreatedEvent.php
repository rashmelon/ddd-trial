<?php

namespace App\Modules\Entity\Domain\Events;

use App\Modules\Entity\Domain\Models\Entity;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EntityCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Entity $entity;

    public function __construct(Entity $entity)
    {
        $this->entity = $entity;
    }

    public function getEntity(): Entity
    {
        return $this->entity;
    }

    public function getEmail(): string
    {
        return $this->entity->email;
    }

    public function getName(): string
    {
        return $this->entity->name;
    }
}
