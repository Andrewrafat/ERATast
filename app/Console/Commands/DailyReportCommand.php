<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\Post;
 use Illuminate\Support\Facades\Mail;
use App\Mail\DailyReportMail;

class DailyReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newUsersCount = User::whereDate('created_at', today())->count();
        $newPosts = Post::whereDate('created_at', today())->get();

        $reportData = [
            'newUsersCount' => $newUsersCount,
            'newPosts' => $newPosts,
        ];

        Mail::to('andrewrafat91@gmail.com')->send(new DailyReportMail($reportData));

        $this->info('Daily report sent successfully!');
    }
}
