<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DailyReportMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $reportData;

    public function __construct($reportData)
    {
        $this->reportData = $reportData;
    }

    public function build()
    {
        return $this->view('dashboard.emails.daily_report')
                    ->subject('Daily Report');
    }
    
}
