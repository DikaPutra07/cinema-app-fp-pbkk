@extends('layouts.layout')

@section('content')
    <!-- =============== START OF MOVIE DETAIL INTRO =============== -->
    <section class="movie-detail-intro ptb150"
        style="background: url({{ asset('images/posters/detail-posters.jpg') }});">
    </section>
    <!-- =============== END OF MOVIE DETAIL INTRO =============== -->



    <!-- =============== START OF MOVIE DETAIL INTRO 2 =============== -->
    <section class="movie-detail-intro2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="movie-poster">
                        <img src="{{ $movie->image }}" style="height: 440px" alt="">
                    </div>


                    <div class="movie-details">
                        <h3 class="title">{{ $movie->title }}</h3>

                        <ul class="movie-subtext">
                            <li>{{ $movie->maturity_rating }}</li>
                            <li>{{ $movie->duration }}</li>
                            <li>{{ $movie->genre->name }}</li>
                            <li>{{ date('d/m/Y', strtotime($movie->release_date)) }}</li>
                        </ul>

                        <a href="#reserve-now" class="btn btn-main btn-effect">Get tickets</a>

                        <div class="rating mt10">
                            @include('components.rating-stars', ['rating' => $movie->rating])
                            <span>{{ number_format(($movie->rating)*0.5, 1) }}/5</span>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </section>
    <!-- =============== End OF MOVIE DETAIL INTRO 2 =============== -->


    <!-- =============== START OF MOVIE DETAIL MAIN SECTION =============== -->
    <section class="movie-detail-main ptb100">
        <div class="container">

            <div class="row">
                <!-- Start of Movie Main -->
                <div class="col-lg-8 col-sm-12">
                    <div class="inner pr50">

                        <!-- Storyline -->
                        <div class="storyline">
                            <h3 class="title">Storyline</h3>

                            <p>{{ $movie->description }}</p>
                        </div>

                        <!-- Cast -->
                        <div class="storyline">
                            <h3 class="title">Actors</h3>
                            <div class="row">
                                @foreach ($movie->actors as $actor)
                                    <div class="col-md-3 d-flex align-items-stretch">
                                        <div class="card" style="width: 100%;">
                                            <img class="card-img-top" src="{{ $actor->image }}" alt="{{ $actor->name }}">
                                            <div class="card-body">
                                                <p class="card-title" style="font-weight: bold">{{ $actor->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Shows -->
                        <div class="movie-media mt50">
                            <h3 id="reserve-now" class="title">Reserve your ticket!</h3>
                            {{-- {{ ddd($shows->first()->date) }} --}}
                                <div class="bg-light p-3 font-weight-bold rounded text-center">
                                    There are current no shows for this movie, check
                                    back later!
                                </div>
                        </div>

                    </div>
                </div>
                <!-- End of Movie Main -->


                <!-- Start of Sidebar -->
                <div class="col-lg-4 col-sm-12">
                    <div class="sidebar">

                        <!-- Start of Details Widget -->
                        <aside class="widget widget-movie-details">
                            <h3 class="title">Details</h3>

                            <ul>
                                <li><strong>Release date:
                                    </strong>{{ date('d/m/Y', strtotime($movie->release_date)) }}
                                </li>
                                <li><strong>Director:
                                    </strong>{{ $movie->director->name }}</li>
                                <li><strong>Language:
                                    </strong>{{ $movie->language }}</li>
                                <li><strong>Maturity rating:
                                    </strong>{{ $movie->maturity_rating }}</li>
                                <li><strong>Running time:
                                    </strong>{{ $movie->duration }} Minutes
                                </li>
                            </ul>
                        </aside>
                        <!-- End of Details Widget -->

                    </div>
                </div>
                <!-- End of Sidebar -->
            </div>

        </div>
    </section>
    <!-- =============== END OF MOVIE DETAIL MAIN SECTION =============== -->

    <!-- =============== START OF MOVIE RECOMENDATION SECTION =============== -->
        <section class="recommended-movies bg-light ptb100">
        <div class="container mb-5">

            <!-- Start of row -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2 class="title">Checkout the Highest Rated Movie </h2>
                </div>
            </div>
            <!-- End of row -->


            <!-- Start of Latest Movies Slider -->
            <div class="owl-carousel recommended-slider mt20">
                @each('components.movie-item-image', $recommendationsByRate, 'movie')
            </div>
            <!-- End of Latest Movies Slider -->

            

        </div>
        <div class="container">

            <!-- Start of row -->
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h2 class="title">People who liked {{ $movie->genre->name }} also liked...</h2>
                </div>
            </div>
            <!-- End of row -->


            <!-- Start of Latest Movies Slider -->
            <div class="owl-carousel recommended-slider mt20">
                @each('components.movie-item-image', $recommendationsByGenre, 'movie')
            </div>
            <!-- End of Latest Movies Slider -->

            

        </div>
        
    </section>

@endsection
