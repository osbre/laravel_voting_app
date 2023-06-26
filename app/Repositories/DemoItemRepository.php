<?php

namespace App\Repositories;

use App\DataObjects\ItemData;

class DemoItemRepository implements ItemRepository
{
    public function all(): array
    {
        return [
            new ItemData(id: 1, name: 'Item 1'),
            new ItemData(id: 2, name: 'Item 2'),
            new ItemData(id: 3, name: 'Item 3'),
        ];
    }

    public function find(int $id): ?ItemData
    {
        return collect($this->all())->firstWhere('id', $id);
    }
}
