<?php

namespace App\Queries;

use App\Collection\ItemVotesTotalCollection;
use App\DataObjects\ItemVotesTotal;
use App\Models\Vote;

class VoteQueries
{
    public function getItemVoteTotals(): ItemVotesTotalCollection
    {
        return Vote::selectRaw('item_id, count(*) as total_count')
            ->groupBy('item_id')
            ->get()
            ->map(fn($item) => new ItemVotesTotal(
                itemId: $item->item_id,
                totalCount: $item->total_count,
            ))
            ->pipeInto(ItemVotesTotalCollection::class);
    }
}
