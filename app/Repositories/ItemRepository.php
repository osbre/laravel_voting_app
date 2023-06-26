<?php

namespace App\Repositories;

use App\DataObjects\ItemData;

interface ItemRepository
{
    /** @return ItemData[] */
    public function all(): array;

    public function find(int $id): ?ItemData;
}
