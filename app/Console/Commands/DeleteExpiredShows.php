<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Show;
use Carbon\Carbon;

class DeleteExpiredShows extends Command
{
    protected $signature = 'shows:delete-expired';
    protected $description = 'Deletes shows that have passed their date and time';

    public function handle()
    {
        $now = Carbon::now()->setTimezone('Asia/Jakarta');
        
        // Hapus Show yang sudah melewati waktu dan tanggal saat ini
        Show::where('date', '<', $now->toDateString())
            ->orWhere(function ($query) use ($now) {
                $query->whereDate('date', $now->toDateString())
                    ->where('start_time', '<=', $now->toTimeString());
            })
            ->delete();

        $this->info('Expired shows deleted successfully at ' . $now->toTimeString() . '.');
    }
}
