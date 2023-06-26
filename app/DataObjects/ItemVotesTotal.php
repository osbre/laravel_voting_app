<?php

namespace App\DataObjects;

class ItemVotesTotal
{
    public function __construct(
        public readonly int $itemId,
        public readonly int $totalCount,
    ) {
    }
}
