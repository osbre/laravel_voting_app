<?php

namespace App\DataObjects;

class ItemData
{
    public function __construct(
        public readonly int    $id,
        public readonly string $name,
    ) {
    }
}
