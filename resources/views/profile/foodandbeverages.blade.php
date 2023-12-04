<div class="container">
    <h1 class="mt-0 mb-0" style="color: #3e4555">My Food and Beverages</h1>
    <hr>

    <a href="{{ route('foodandbeverages-create') }}" class="btn btn-second text-white">Add New Food and Beverage</a>

    <br><br>

    @if ($reservations->isNotEmpty())
        <table class="table table-responsive table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">F&B</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach ($foodBeverages as $fb)
                <tr>
                    <th>{{ $fb->id }}</th>
                    <th>{{ $fb->name }}</th>
                    <th>{{ $fb->price }}</th>
                    <td>
                        <img src="{{ asset($fb->image) }}" alt="{{ $fb->name }}" width="100px">
                    </td>
                    <td>{{ $fb->foodBeverageCategory->name }}</td>
                    <td>
                        <form action="{{ route('foodandbeverages-destroy', $fb->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-red text-white" type="submit" value="Delete">
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('foodandbeverages-edit', $fb->id) }}" class="btn btn-second text-white">Edit</a>
                    </td>

                </tr>
            @endforeach
        </table>
    @else
        <div class="bg-light p-3 font-weight-bold rounded text-center">
            You don't have any future reservations.
        </div>
    @endif
</div>
