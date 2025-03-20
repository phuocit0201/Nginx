<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected string $to;
    protected string $subject;
    protected string $body;

    public function __construct(string $to, string $subject, string $body)
    {
        $this->to      = $to;
        $this->subject = $subject;
        $this->body    = $body;
    }

    public function handle()
    {
        Mail::to($this->to)->send(new SendEmail($this->subject, $this->body));
    }
}