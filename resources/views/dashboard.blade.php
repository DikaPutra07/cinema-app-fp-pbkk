@extends('layouts.layout')

@section('content')

    @include('hero-slider')

    <!-- =============== START OF TOP MOVIES SECTION =============== -->
    <section class="top-movies2">
        <div class="container">
            <div class="row">
                @php
                    $containerClasses = ['col-sm-6 col-xs-12', 'col-sm-6 d-none d-sm-block', 'd-none d-lg-block', 'd-none d-lg-block'];
                @endphp
                @foreach ($top_movies as $movie)
                    @include('components.movie-item-dark', [
                        'movie' => $movie,
                        'containerClass' => $containerClasses[$loop->index],
                    ])
                @endforeach
            </div>
        </div>
    </section>
    <!-- =============== END OF TOP MOVIES SECTION =============== -->

    <!-- =============== START OF HOW IT WORKS SECTION =============== -->
    <section class="how-it-works4 pt50 pb100">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">How it works?</h2>
                    <h6 class="subtitle">Feeling confused? start here.</h6>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="icon-box2">
                        <i class="fa fa-film">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                            </svg>
                        </i>
                        <h4 class="title">Pilih Film Favorit Anda</h4>
                        <p>Temukan koleksi film kami yang luas dan menarik. Belum tahu film apa yang akan ditonton? Lihatlah <a href='# ' class="text-primary">rekomendasi kami.</a></p>
                    </div>

                    <div class="icon-box2">
                        <i class="fa fa-ticket">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                            <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"/>
                            <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"/>
                            </svg>
                        </i>
                        <h4 class="title">Reservasi Tiket Anda</h4>
                        <p>Reservasi tiket untuk film favorit Anda!</p>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="icon-box2">
                        <i class="fa fa-user">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>
                        </i>
                        <h4 class="title">Daftar Akun Anda</h4>
                        <p>Daftarkan akun Anda untuk reservasi dan pembayaran tiket. Juga untuk mendapatkan informasi terbaru tentang penawaran dan berita kami.</p>
                    </div>

                    <div class="icon-box2">
                        <i class="fa fa-heart">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                            </svg>
                        </i>
                        <h4 class="title">Nikmati Pengalaman Anda!</h4>
                        <p>Nikmati film Anda di salah satu ruang bioskop kami, pesan camilan selagi menonton. Kenyamanan Anda adalah prioritas kami.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =============== END OF HOW IT WORKS SECTION =============== -->

    <!-- =============== START OF LATEST RELEASES SECTION =============== -->
    <section class="latest-releases bg-light ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">Newest Movies</h2>
                    <h6 class="subtitle">View our latest movies collection.</h6>
                </div>
            </div>
            <!-- End of row -->
        </div>
        <!-- End of Container -->

        <!-- Start of Latest Releases Slider -->
        <div class="owl-carousel latest-releases-slider">
            @each('components.movie-item', $newest_movies, 'movie')
        </div>
        <!-- End of Latest Releases Slider -->

        <div class="text-center pt-3">
            <a class="btn btn-main btn-effect" href="#">See All Movies</a>
        </div>
    </section>
    <!-- =============== END OF LATEST RELEASES SECTION =============== -->

    <!-- =============== START OF FEATURES SECTION =============== -->
    <section class="features">
        <div class="row">

            <div class="col-md-6 col-sm-12 with-bg overlay-gradient"
                style="background: url({{ asset('images/posters/home2-posters.jpg') }})"></div>

            <div class="col-md-6 col-sm-12 bg-white">
                <div class="features-wrapper">
                    <h3 class="title">Watch all newest Movies once they get released!</h3>
                    @guest
                        <p>Sign up or register now to reserve you own tickets. And get notified on new offers and news!</p>
                        <a class="btn btn-main btn-effect" href="{{ route('register') }}">Register</a>
                    @endguest

                    @auth
                        <p>Start reserving your tickets to enjoy the latest and greatest movies!</p>
                        <a class="btn btn-main btn-effect" href="#">Shows</a>
                    @endauth
                </div>
            </div>

        </div>
    </section>
    <!-- =============== END OF FEATURES SECTION =============== -->

    <!-- =============== END OF SUBSCRIBE SECTION =============== -->
    <section class="subscribe bg-light2 ptb100">
        <div class="container">

            <!-- Start of row -->
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    @guest
                        <h2 class="title">Join Cinemat Now!</h2>
                        <h6 class="subtitle">Enter your email to be notified about any news and new offers!</h6>
                    @endguest

                    @auth
                        <h2 class="title">Thanks For Using Cinema XX11!</h2>
                        <h6 class="subtitle">We hope you enjoy your experience with us!</h6>
                    @endauth
                </div>
            </div>
            <!-- End of row -->


            @guest
                <!-- Start of row -->
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10 col-12">

                        <!-- Subscribe Form -->
                        <form method="POST" action="#" class="mt50">
                            @csrf
                            <!-- Form -->
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Your Email" autocomplete="off">
                                    <label for="email"></label>
                                    <button type="submit" class="btn btn-main btn-effect">Subscribe</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- End of row -->
            @endguest


        </div>
    </section>
    @include('components.flash-message')

@endsection
