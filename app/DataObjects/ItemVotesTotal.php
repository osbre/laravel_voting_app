<?php

namespace App\DataObjects;

class ItemVotesTotal
{
    public function __construct(
        public int $itemId,
        public int $totalCount,
    ) {
    }
}
