<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'payment_id' => ['required', Rule::exists(Payment::class, 'id')], // 'exists:shows,id
            'payment_number' => 'required',
            'payment_account' => 'required',
            'show_id' => ['required', Rule::exists(Show::class, 'id')],
            'selected_seats' => ['array', 'required']
        ]);

        foreach ($request->selected_seats as $seat) {
            Reservation::create([
                'show_id' => $request->show_id,
                'user_id' => auth()->user()->id,
                'payment_id' => $request->payment_id,
                'payment_number' => $request->payment_number,
                'payment_account' => $request->payment_account,
                'seat' => $seat,
            ]);
        }

        $show = Show::find($request->show_id);
        $show->remaining_seats -= count($request->selected_seats);
        $show->save();

        return redirect('/')->with('success', 'Reservation created successfully');
    }

    public function destroy(Reservation $reservation)
    {
        $show = Show::find($reservation->show_id);
        $show->remaining_seats += 1;

        $reservation->delete();
        $show->save();

        return redirect()->back();
    }
}
