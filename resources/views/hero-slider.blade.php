<!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
<section id="slider" class="hero-slider">
    <div class="rev-slider-wrapper fullwidthbanner-container overlay-gradient">
        <!-- Start REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="hero-slider" class="rev_slider fullwidthabanner" style="display:none" data-version="5.4.1">
            <ul>

                <!-- ===== SLIDE NR. 1 ===== -->
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/posters/home-posters.jpg') }}" alt="Image"
                        title="slider-bg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                        data-bgparallax="10" class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle"
                        data-voffset="['-80','-80','-80','-80']" data-responsive_offset="on"
                        data-fontsize="['60','50','40','30']" data-lineheight="['60','50','40','30']"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">WELCOME TO CINEMA XXII</div>


                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="middle"
                        data-voffset="[0]" data-width="[1200, 992, 768, 98%]" data-responsive_offset="on"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">

                        <!-- ===== START OF SEARCH FORM ===== -->
                        <form id="search-form-1" method="GET" action="{{ route('movies-index') }}">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-sm-10 col-12">
                                    <div class="form-group">
                                        <input name="search" type="text" id="search" value=""
                                            class="form-control" placeholder="Enter Movies or Series Title">
                                        <button type="submit" class="btn btn-main btn-effect">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- ===== END OF SEARCH FORM ===== -->

                    </div>


                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme text-center" data-x="center" data-hoffset="" data-y="middle"
                        data-voffset="['100','100','80','80']" data-responsive_offset="on" data-fontsize="['16']"
                        data-lineheight="['22']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 400;">
                        Have a look at our top rated <br />Movies and TV Shows!
                    </div>


                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme" data-x="[730, 630, 520, 370]" data-hoffset="" data-y="middle"
                        data-voffset="['115','115','90','500']" data-responsive_offset="on" data-fontsize="['16']"
                        data-lineheight="['22']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 400;">
                        <img src="{{ asset('images/other/banner-arrow.png') }}" alt="">
                    </div>
                </li>

            </ul>
        </div>
        <!-- End REVOLUTION SLIDER 5.4.1 fullwidth mode -->
    </div>
    <!-- ===== END OF REV SLIDER WRAPPER ===== -->

</section>
<!-- =============== START OF SLIDER REVOLUTION SECTION =============== -->
