<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Show;
use Carbon\Carbon;

class DeleteExpiredShows implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $now = Carbon::now()->setTimezone('Asia/Jakarta');
        
        // Hapus Show yang sudah melewati waktu dan tanggal saat ini
        Show::where('date', '<', $now->toDateString())
            ->orWhere(function ($query) use ($now) {
                $query->whereDate('date', $now->toDateString())
                    ->where('start_time', '<=', $now->toTimeString());
            })
            ->delete();
    }
}
