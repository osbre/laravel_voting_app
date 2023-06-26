<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoteRequest;
use App\Jobs\StoreVoteJob;
use App\Models\Vote;

class VoteController extends Controller
{
    public function store(StoreVoteRequest $request)
    {
        $this->authorize('create', Vote::class);

        dispatch(new StoreVoteJob($request->toDataObject()));

        return redirect()->back();
    }
}
