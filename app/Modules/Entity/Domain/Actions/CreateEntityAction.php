<?php

namespace App\Modules\Entity\Domain\Actions;

use App\Modules\Entity\Domain\Models\Entity;

class CreateEntityAction
{
    public function __invoke(array $data): Entity
    {
        return Entity::create($data);
    }
}
