<div class="container">
    <h1 class="mt-0 mb-0" style="color: #3e4555">My Orders</h1>
    <hr>
    @if ($orders->isNotEmpty())
        <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Payment Number</th>
                    <th scope="col">Payment Account</th>
                    <th scope="col">Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->payment->method }}</td>
                    <td>{{ $order->payment_number }}</td>
                    <td>{{ $order->payment_account }}</td>
                    <td>{{ date('d/m/Y', strtotime($order->time)) }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a href="{{ route('profile.orderdetails', $order->id) }}" class="btn btn-second">Details</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        <div class="bg-light p-3 font-weight-bold rounded text-center">
            You haven't made any orders yet.
        </div>
    @endif
</div>
