<?php

namespace App\Actions;

use App\Mail\VotingReportMail;
use App\Queries\VoteQueries;
use Illuminate\Support\Facades\Mail;

class SendVotingReportAction
{
    public function __construct(
        protected VoteQueries $voteQueries,
        protected string      $recipientEmail,
    ){
    }

    public function execute()
    {
        $totals = $this->voteQueries->getItemVoteTotals();

        Mail::to($this->recipientEmail)->send(new VotingReportMail($totals));
    }
}
