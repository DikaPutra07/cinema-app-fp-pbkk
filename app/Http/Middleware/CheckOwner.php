<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\OrderFoodBeverage;

class CheckOwner
{
    public function handle(Request $request, Closure $next)
    {
        $orderId = $request->route('id'); // Mendapatkan ID dari URL
        $order = OrderFoodBeverage::find($orderId); // Mendapatkan detail transaksi

        // Periksa apakah transaksi ditemukan dan apakah pengguna adalah pemiliknya
        if (!$order || $order->user_id !== auth()->id()) {
            return abort(404, 'Not Found'); // Jika bukan pemilik, kembalikan error 403
        }

        return $next($request); // Jika pengguna adalah pemilik, lanjutkan ke halaman detail transaksi
    }
}
