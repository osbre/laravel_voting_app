<?php

namespace App\Collection;

use App\DataObjects\ItemVotesTotal;
use Illuminate\Support\Collection;
use Webmozart\Assert\Assert;

class ItemVotesTotalCollection extends Collection
{
    public function __construct($items = [])
    {
        Assert::allIsInstanceOf($items, ItemVotesTotal::class);
        parent::__construct($items);
    }
}
