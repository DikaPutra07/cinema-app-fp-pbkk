<div class="item">

    <div class="movie-box-3">
        <div class="listing-container">

            <!-- Movie List Image -->
            <div class="listing-image">
                <!-- Image -->
                <img src="{{ $movie->image }}" alt="">
            </div>

            <!-- Movie List Content -->
            <div class="listing-content">
                <div class="inner">

                    <!-- Play Button -->
                    <div class="play-btn">
                        <a href="{{  route('movie-detail',$movie->id)  }}#reserve-now" class="play-video">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                            <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                            <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                            </svg>
                        </a>
                    </div>

                    <h2 class="title">{{ $movie->title }}</h2>

                    <!-- Rating -->
                    <div class="stars">
                        <div class="rating">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            <span>{{ number_format(($movie->rating*0.5), 1) }}/5</span>
                            <span class="category">{{ $movie->genre->name }}</span>
                        </div>
                    </div>

                    <p>{{ Str::limit($movie->description, 150, '...') }}</p>

                    <a href="{{ route('movie-detail', $movie->id) }}" class="btn btn-main btn-effect">details</a>
                </div>
            </div>

        </div>
    </div>
</div>