@extends('layouts.layout')

@push('head')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush

@section('content')
    <section class="page-header overlay-gradient"
        style="background: url({{ asset('images/posters/home-posters.jpg') }});">
        <div class="container">
            <div class="inner">
                <h2 class="title">Movies</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Movies</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- =============== START OF MAIN =============== -->
    <main class="ptb100">
        <div class="container" x-data="{
            layout: 'grid',
            setLayout(newLayout) {
                if (newLayout != 'grid' && newLayout != 'list') return;
                this.layout = newLayout;
                localStorage.setItem('layout', newLayout);
            },
            init() {
                const localLayout = localStorage.layout;
                if (localLayout == 'grid' || localLayout == 'list') {
                    this.layout = localLayout;
                } else {
                    this.layout = 'grid';
                }
            }
        }">

            <!-- Start of Filters -->
            <div class="d-flex mb50 align-items-center justify-content-between">


                <form method="GET" action="{{ route('movies-index') }}" class="d-flex">

                    <input type="search" name="search" id="search" class="py-1 form-control" placeholder="search"
                        style="flex-basis: fit-content" value="{{ request('search') }}">

                    <div class="px-3 py-3 py-xl-0"></div>

                    <div class="d-flex align-items-center">
                        <label for="genre" class="pr-1 text-nowrap">Category:</label>
                        <select name="genre" id="genre" class="py-1">
                            <option value="all" {{ request('genre') == 'all' }} default>All Genre</option>
                            @foreach (\App\Models\Genre::all() as $genre)
                                <option value="{{ $genre->name }}"
                                    {{ request('genre') == $genre->name }}>
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- <div class="px-3 py-3 py-xl-0"></div> --}}

                    <div class="px-2 py-3 py-xl-0"></div>

                    <input type="submit" value="Filter" class="btn btn-main">

                </form>

                <div class="py-3 py-xl-0"></div>


            </div>
            <!-- End of Filters -->


            @if ($movies->isEmpty())
                <p class="bg-light font-weight-bold h4 p-5 rounded text-center">No movies found!</p>
            @else
                <div class="row" x-transition>
                    @each('components.movie-grid-item', $movies, 'movie')
                </div>
            @endif


            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    {!! $movies->links('pagination::bootstrap-4') !!}
                </div>
            </div>
            <!-- End of Pagination -->

        </div>
    </main>
    <!-- =============== END OF MAIN =============== -->
@endsection
