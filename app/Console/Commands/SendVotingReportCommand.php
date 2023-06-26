<?php

namespace App\Console\Commands;

use App\Actions\SendVotingReportAction;
use Illuminate\Console\Command;

class SendVotingReportCommand extends Command
{
    protected $signature = 'votes:send-report';

    protected $description = 'Command description';

    public function handle(SendVotingReportAction $sendVotingReportAction): void
    {
        $sendVotingReportAction->execute();
    }
}
