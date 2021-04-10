<?php

namespace App\Modules\Entity\Domain\Actions;

class EntityRegisteredAction
{
    private CreateEntityAction $createEntityAction;

    private TriggerEntityCreatedEvent $triggerEntityCreatedEvent;

    public function __construct(CreateEntityAction $createEntityAction, TriggerEntityCreatedEvent $triggerEntityCreatedEvent)
    {
        $this->createEntityAction = $createEntityAction;
        $this->triggerEntityCreatedEvent = $triggerEntityCreatedEvent;
    }

    public function __invoke(array $data)
    {
        $entity = ($this->createEntityAction)($data);

        ($this->triggerEntityCreatedEvent)($entity);
    }
}
