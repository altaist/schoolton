<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DeleteUnpaidOrders extends Command
{
    protected $signature = 'orders:delete-unpaid';
    protected $description = 'Delete unpaid orders older than 10 minutes';

    public function handle()
    {
        Order::where('status', 'new')
            ->where('expires_at', '<=', now())
            ->delete();
    }
} 