<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Show;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'show_id' => ['required', Rule::exists(Show::class, 'id')],
            'selected_seats' => ['array', 'required']
        ]);

        foreach ($request->selected_seats as $seat) {
            Reservation::create([
                'show_id' => $request->show_id,
                'user_id' => auth()->user()->id,
                'payment_id' => 1,
                'seat' => $seat,
            ]);
        }

        $show = Show::find($request->show_id);
        $show->remaining_seats -= count($request->selected_seats);
        $show->save();
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        $show = Show::find($reservation->show_id);
        $show->remaining_seats += 1;
        $show->save();
    }
}
