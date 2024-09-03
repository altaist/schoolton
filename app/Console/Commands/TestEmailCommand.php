<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing email';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::mailer('log')->raw('Test log email', function($msg) {$msg->to('apechersky@ya.ru')->subject('Test log email subject'); });
        Mail::mailer('smtp')->raw('Test smtp email', function($msg) {$msg->to('apechersky@ya.ru')->subject('Test smtp email subject'); });
    }
}
