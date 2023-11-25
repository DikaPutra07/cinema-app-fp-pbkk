<!-- =============== START OF RESPONSIVE - MAIN NAV =============== -->
<nav id="main-mobile-nav"></nav>
<!-- =============== END OF RESPONSIVE - MAIN NAV =============== -->

<!-- =============== START OF HEADER NAVIGATION =============== -->
<!-- Insert the class "sticky" in the header if you want a sticky header -->
<header class="header text-black sticky">
    <div class="container-fluid">

        <!-- ====== Start of Navbar ====== -->
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href={{ route('home') }}>
                <!-- INSERT YOUR LOGO HERE -->
                <img src="{{ asset('images/logos/logo-white.png') }}" alt="logo" width="250" class="logo">
                <!-- INSERT YOUR WHITE LOGO HERE -->
                <img src="{{ asset('images/logos/logo-white.png') }}" alt="white logo" width="200"
                    class="logo-white">
            </a>

            <!-- Login Button on Responsive -->
            <a href="#" class="login-mobile-btn border px-2 py-1"
                style="border-radius: 0.5rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 35%;">
                <i class="icon-user"></i>
                @auth
                    {{ auth()->user()->first_name }}
                @endauth
            </a>

            <button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>

            <!-- ====== Start of #main-nav ====== -->
            <div class="navbar-collapse" id="main-nav">

                <!-- ====== Start of Main Menu ====== -->
                <ul class="navbar-nav mx-auto" id="main-menu">
                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Ticket</a>
                    </li>

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('movies-index') }}>Movies</a>
                    </li>

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ route('foodandbeverages-index') }} ">Food & Beverage</a>
                    </li>

                    <!-- Menu Item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact-us') }}">About Us</a>
                    </li>

                </ul>
                <!-- ====== End of Main Menu ====== -->


                <!-- ====== Start of Extra Nav ====== -->
                <ul class="navbar-nav extra-nav">

                    <!-- Menu Item -->
                    {{-- @auth
                    <div style="display: flex; align-items: center;">
                        <li class="nav-item notification-wrapper">
                            <a class="nav-link notification" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                                <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                                </svg>
                                <span class="notification-count">
                                    {{ auth()->user()->reservations->count() }}
                                </span>
                            </a>
                        </li>
                    </div>
                    @endauth --}}

                    @auth
                    <div style="display: flex; align-items: center;">
                        <li class="nav-item dropdown" style="z-index: 50;">
                            <a href="#" class="btn btn-main btn-effect login-btn profilemanage">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                </svg>
                                <span style="margin-left: 5px">
                                    Hello, {{ auth()->user()->first_name }}
                                </span>
                            </a>
                            <div class="dropdown-content rounded font-weight-normal">
                                <a href="{{ route('profilenizam-index') }}">My Account</a>
                                <a href="#">My Ticket</a>
                                <form id="logout_form" method="POST" action="logout
                                ">
                                    @csrf
                                    <a href="javascript:{}" onclick="document.getElementById('logout_form').submit();">Log
                                        Out</a>
                                </form>
                            </div>
                        </li>
                    </div>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-main btn-effect login-btn profilemanage">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                </svg>
                                <span style="margin-left: 5px">
                                    Login
                                </span>
                            </a>
                        </li>
                    @endauth

                </ul>
                <!-- ====== End of Extra Nav ====== -->

            </div>
            <!-- ====== End of #main-nav ====== -->
        </nav>
        <!-- ====== End of Navbar ====== -->

    </div>
</header>
<!-- =============== END OF HEADER NAVIGATION =============== -->
