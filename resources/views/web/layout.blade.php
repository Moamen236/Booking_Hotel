<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <!-- ========== SEO ========== -->
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- ========== FAVICON ========== -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset("web/images/favicon-apple.png") }}"/>
    <link rel="icon" href="{{ asset("web/images/favicon.png") }}">
    <!-- ========== STYLESHEETS ========== -->
    <link rel="stylesheet" href="{{ asset("web/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/bootstrap-select.min.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/jquery.mmenu.css") }}">
    <link rel="stylesheet" href="{{ asset("web/revolution/css/layers.css") }}">
    <link rel="stylesheet" href="{{ asset("web/revolution/css/settings.css") }}">
    <link rel="stylesheet" href="{{ asset("web/revolution/css/navigation.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/animate.min.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/daterangepicker.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("web/css/responsive.css") }}">
    <!-- ========== ICON FONTS ========== -->
    <link href="{{ asset("web/fonts/font-awesome.min.css") }}" rel="stylesheet">
    <link href="{{ asset("web/fonts/flaticon.css") }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- ========== GOOGLE FONTS ========== -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700%7CRoboto:100,300,400,400i,500,700" rel="stylesheet">
    @yield('css')
  </head>
  <body>
    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
      <div class="loader-inner">
        <div class="spin">
          <span></span>
          <img src="{{ asset("web/images/logo.svg") }}" alt="Hotel Himara">
        </div>
      </div>
    </div>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        <!-- ========== HEADER ========== -->
        <header class="horizontal-header sticky-header" data-menutoggle="991">
            <div class="container">
                <!-- BRAND -->
                <div class="brand">
                    <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset("web/images/logo.svg") }}" alt="Hotel Himara">
                    </a>
                    </div>
                </div>
                <!-- MOBILE MENU BUTTON -->
                <div id="toggle-menu-button" class="toggle-menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <!-- MAIN MENU -->
                <nav id="main-menu" class="main-menu">
                    <form id="logout-form" action="{{ url('/logout') }}" method="post" class="d-none">@csrf</form>
                    <ul class="menu">
                        <li class="menu-item {{ Request::segment(1) == '' ? 'active' : '' }}">
                            <a href="{{ route('home') }}">HOME</a>
                        </li>
                        <li class="menu-item {{ Request::segment(1) == 'about-us' ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="menu-item {{ Request::segment(1) == 'rooms' ? 'active' : '' }}">
                            <a href="{{ route('rooms') }}">ROOMS</a>
                        </li>
                        <li class="menu-item {{ Request::segment(1) == 'blogs' ? 'active' : '' }}">
                            <a href="{{ route('blogs') }}">BLOG</a>
                        </li>
                        <li class="menu-item {{ Request::segment(1) == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ route('contact-us') }}">CONTACT US</a>
                        </li>
                        <li class="menu-item menu-btn">
                            <a href="{{ route('booking.index') }}" class="btn">
                            <i class="fa fa-calendar"></i>
                            BOOK ONLINE</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#"><i class="bx bx-user bx-sm"></i></a>
                            <ul class="submenu">
                                @auth
                                    <li class="menu-item">
                                        <a href="#">Profile</a>
                                    </li>
                                    <li class="menu-item">
                                        <a id="logout-link" href="#">Log out</a>
                                    </li> 
                                @endauth
                                @guest
                                    <li class="menu-item">
                                        <a href="{{ route('login') }}">Login</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('register') }}">Register</a>
                                    </li>
                                @endguest
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        @yield('content')

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets">
            <div class="container">
                <div class="row">
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                    <img src="{{ asset("web/images/logo.svg") }}" class="footer-logo" alt="Hotel Himara">
                    <div class="inner">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda incidunt dolorem aliquam!</p>
                        <a href="https://www.tripadvisor.com/" target="_blank">
                        <div class="tripadvisor-banner">
                            <span class="review">Recommended</span>
                            <img src="{{ asset("web/images/icons/tripadvisor.png") }}" alt="Image">
                        </div>
                        </a>
                    </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                    <h3>LATEST NEWS</h3>
                    <div class="inner">
                        <ul class="latest-posts">
                        <li>
                            <a href="blog-post.html">10 Tips for holiday travel</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                        </li>
                        <li>
                            <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                    <h3>USEFUL LINKS</h3>
                    <div class="inner">
                        <ul class="useful-links">
                        <li>
                            <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li>
                            <a href="shop.html">Shop</a>
                        </li>
                        <li>
                            <a href="gallery.html">Himara Gallery</a>
                        </li>
                        <li>
                            <a href="location.html">Our Location</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                <!-- WIDGET -->
                <div class="col-md-3">
                    <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <div class="inner">
                        <ul class="contact-details">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Lorem ipsum dolor, 25, Himara</li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            Phone: +1 888 123 4567
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>
                            Fax: +1 888 123 4567</li>
                        <li>
                            <i class="fa fa-globe"></i>
                            Web: www.hotelhimara.com</li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            Email:
                            <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- SUBFOOTER -->
            <div class="subfooter">
            <div class="container">
                <div class="row">
                <div class="col-md-6">
                    <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                    <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.</div>
                </div>
                <div class="col-md-6">
                    <div class="social-media">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                        <i class="fa fa-pinterest"></i>
                    </a>
                    <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </footer>
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <script src="{{ asset("web/js/jquery.min.js") }}"></script>
    <script src="{{ asset("web/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("web/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("web/js/jquery.mmenu.js") }}"></script>
    <script src="{{ asset("web/js/jquery.inview.min.js") }}"></script>
    <script src="{{ asset("web/js/jquery.countdown.min.js") }}"></script>
    <script src="{{ asset("web/js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("web/js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("web/js/owl.carousel.thumbs.min.js") }}"></script>
    <script src="{{ asset("web/js/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("web/js/imagesloaded.pkgd.min.js") }}"></script>
    <script src="{{ asset("web/js/masonry.pkgd.min.js") }}"></script>
    <script src="{{ asset("web/js/wow.min.js") }}"></script>
    <script src="{{ asset("web/js/countup.min.js") }}"></script>
    <script src="{{ asset("web/js/moment.min.js") }}"></script>
    <script src="{{ asset("web/js/daterangepicker.js") }}"></script>
    <script src="{{ asset("web/js/parallax.min.js") }}"></script>
    <script src="{{ asset("web/js/smoothscroll.min.js") }}"></script>
    <script src="{{ asset("web/js/instafeed.min.js") }}"></script>
    <script src="{{ asset("web/js/main.js") }}"></script>
    <!-- ========== REVOLUTION SLIDER ========== -->
    <script src="{{ asset("web/revolution/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/jquery.themepunch.revolution.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.actions.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.carousel.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.kenburn.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.layeranimation.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.migration.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.navigation.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.parallax.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.slideanims.min.js") }}"></script>
    <script src="{{ asset("web/revolution/js/extensions/revolution.extension.video.min.js") }}"></script>

    <script>
        $('#logout-link').click(function(e){
            e.preventDefault();
            $('#logout-form').submit();
        });
    </script>

    @yield('scripts')
  </body>
</html>