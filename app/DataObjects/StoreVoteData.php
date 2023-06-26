<?php

namespace App\DataObjects;

class StoreVoteData
{
    public function __construct(
        public readonly int    $item_id,
        public readonly int    $user_id,
        public readonly string $ipAddress,
    ) {
    }
}
