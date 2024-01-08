        <!-- Main Header-->
        <header class="main-header header-style-two">
            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <!-- Main Box -->
                    <div class="main-box clearfix">
                        <div class="outer clearfix">
                            <div class="nav-box clearfix">
                                <!--Nav Outer-->
                                <div class="nav-outer clearfix">
                                    <nav class="main-menu">
                                        <ul class="navigation clearfix">
                                            <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a
                                                    href="{{ route('home') }}">Home</a></li>
                                            <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a
                                                    href="{{ route('about') }}">About</a></li>
                                            <li class="{{ request()->routeIs('service') ? 'current' : '' }}"><a
                                                    href="{{ route('service') }}">Service</a></li>
                                            <li>
                                                <h3><a href="{{ route('package') }}">
                                                        Nusantara Boarding House
                                                    </a>
                                                </h3>
                                            </li>
                                            <li class="{{ request()->routeIs('facility') ? 'current' : '' }}"><a
                                                    href="{{ route('facility') }}">Facilities</a></li>
                                            <li class="{{ request()->routeIs('gallery') ? 'current' : '' }}"><a
                                                    href="{{ route('gallery') }}">Gallery</a></li>
                                            <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a
                                                    href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Main Menu End-->
                                </div>
                                <!--Nav Outer End-->

                            </div>

                            <div class="links-box clearfix">
                                @guest
                                    <div class="link" style="height: 25px; width: auto;;"><a
                                            href="{{ route('register') }}" class="theme-btn btn-style-three"
                                            style="border-color: black;"><span class="text-secondary">Sign Up</span></a>
                                    </div>
                                    <div class="link"><a href="{{ route('login') }}"
                                            class="theme-btn btn-style-two"><span>Sign
                                                In</span></a></div>
                                @else
                                    <div class="link"><a href="{{ route('profile.edit') }}"
                                            class="theme-btn btn-style-two"><span>Profile</span></a></div>
                                @endguest

                            </div>

                            <!-- Hidden Nav Toggler -->
                            <div class="nav-toggler">
                                <button class="hidden-bar-opener"><span class="icon"><img
                                            src="{{ asset('assets/front/images/icons/menu-icon.svg') }}"
                                            alt=""></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Upper -->
        </header>
        <!--End Main Header -->


        <!--Menu Backdrop-->
        <div class="menu-backdrop"></div>

        <!-- Hidden Navigation Bar -->
        <section class="hidden-bar">
            <!-- Hidden Bar Wrapper -->
            <div class="hidden-bar-wrapper">
                <div class="hidden-bar-closer"><span class="icon"><svg class="icon-close" role="presentation"
                            viewBox="0 0 16 14">
                            <path d="M15 0L1 14m14 0L1 0" stroke="currentColor" fill="none" fill-rule="evenodd">
                            </path>
                        </svg></span></div>
                <div class="nav-logo-box">
                    <div class="logo"><a href="{{ route('package') }}" title="Kosan Nusantara"><img
                                src="{{ asset('/assets/front/images/logo/kosan.png') }}" alt=""
                                title="Kosan Nusantara"></a></div>
                </div>
                <!-- .Side-menu -->
                <div class="side-menu">
                    <ul class="navigation clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('service') }}">Service</a></li>
                        <li><a href="{{ route('facility') }}">Facilities</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div><!-- /.Side-menu -->

                <div class="links-box clearfix">
                    <div class="clearfix">
                        <div class="link"><a href="{{ route('login') }}" class="theme-btn btn-style-one"><span>Login
                                    /
                                    Signup</span></a></div>
                    </div>
                </div>

            </div><!-- / Hidden Bar Wrapper -->
        </section>
        <!-- / Hidden Bar -->
