<!-- Movie List Item -->
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="movie-box-1 mb30">

        <!-- Start of Poster -->
        <div class="poster">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }} Poster"
                style="aspect-ratio: 25/37">
        </div>
        <!-- End of Poster -->

        <!-- Start of Buttons -->
        <div class="buttons">
            <a href="{{ route('movie-detail', $movie->id) }}" class="play-video">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                </svg>

            </a>
        </div>
        <!-- End of Buttons -->

        <!-- Start of Movie Details -->
        <div class="movie-details">
            <h4 class="movie-title">
                <a href="{{ route('movie-detail', $movie->id) }}">{{ $movie->title }}</a>
            </h4>
            <span class="released">{{ date('d/m/Y', strtotime($movie->release_date)) }}</span>
        </div>
        <!-- End of Movie Details -->

        <!-- Start of Rating -->
        <div class="stars">
            <div class="rating">
                @include('components.rating-stars', ['rating' => $movie->rating])
            </div>
            <span>{{ number_format(($movie->rating)/0.5, 1) }}/5</span>
        </div>
        <!-- End of Rating -->

    </div>
</div>
