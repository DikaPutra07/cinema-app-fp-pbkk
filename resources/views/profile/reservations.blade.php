<div class="container">
    <h1 class="mt-0 mb-0" style="color: #3e4555">My Reservations</h1>
    <hr>
    @if ($reservations->isNotEmpty())
        <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Movie</th>
                    <th scope="col">Show time</th>
                    <th scope="col">Room</th>
                    <th scope="col">Seat number</th>
                    <th scope="col">Show price</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($reservations as $reservation)
                <tr>
                    <th>{{ $reservation->show->movie->title }}</th>
                    <th>{{ date('d/m/Y', strtotime($reservation->show->date)) }}</th>
                    <th>{{ $reservation->show->studio->id }}</th>
                    <td>{{ $reservation->seat }}</td>
                    <td>{{ $reservation->show->price . ' ' . config('app.currency') }}</td>
                    @if ($reservation->show->date > Carbon\Carbon::now()->add(3, 'hour'))
                        <td class="disabled">
                            <form action="{{ route('reservation-destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <input class="btn btn-second text-white" type="submit" value="Cancel Reservation">
                            </form>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    @else
        <div class="bg-light p-3 font-weight-bold rounded text-center">
            You don't have any future reservations.
        </div>
    @endif
</div>
