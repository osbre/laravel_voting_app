<?php

namespace App\DataObjects;

class StoreVoteData
{
    public function __construct(
        public readonly int    $itemId,
        public readonly int    $userId,
        public readonly string $ipAddress,
    ) {
    }
}
