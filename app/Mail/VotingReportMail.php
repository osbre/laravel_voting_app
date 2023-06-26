<?php

namespace App\Mail;

use App\Collection\ItemVotesTotalCollection;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VotingReportMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(protected ItemVotesTotalCollection $itemVotesTotals)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Voting Report from ' . now()->format('Y-m-d'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.voting-report',
            with: [
                'itemVotesTotals' => $this->itemVotesTotals,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
