<?php

namespace App\Jobs;

use App\Actions\StoreVoteAction;
use App\DataObjects\StoreVoteData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreVoteJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public StoreVoteData $data,
    ) {
    }

    public function handle(StoreVoteAction $storeVoteAction): void
    {
        $storeVoteAction->execute($this->data);
    }
}
