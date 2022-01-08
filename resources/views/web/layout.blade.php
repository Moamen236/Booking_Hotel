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
                <a href="index.html">
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
                <ul class="menu">
                <li class="menu-item dropdown active">
                    <a href="#">HOME</a>
                    <ul class="submenu">
                    <li class="menu-item">
                        <a href="index.html">Home Version 1</a>
                    </li>
                    <li class="menu-item">
                        <a href="index2.html">Home Version 2</a>
                    </li>
                    <li class="menu-item">
                        <a href="index3.html">Home Version 3</a>
                    </li>
                    <li class="menu-item">
                        <a href="index4.html">Home Version 4</a>
                    </li>
                    <li class="menu-item">
                        <a href="index5.html">Home Version 5</a>
                    </li>
                    <li class="menu-item">
                        <a href="index6.html">Home Version 6</a>
                    </li>
                    <li class="menu-item">
                        <a href="index7.html">Home Version 7</a>
                    </li>
                    <li class="menu-item">
                        <a href="index8.html">Home Version 8</a>
                    </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">ROOMS</a>
                    <ul class="submenu">
                    <li class="menu-item dropdown">
                        <a href="#">Rooms</a>
                        <ul class="submenu">
                        <li class="menu-item">
                            <a href="rooms-list.html">List View</a>
                        </li>
                        <li class="menu-item">
                            <a href="rooms-grid.html">Grid View</a>
                        </li>
                        <li class="menu-item">
                            <a href="rooms-block.html">Block View</a>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#">Room Details</a>
                        <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Style 1</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="room.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="room-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="room-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Style 2</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="room-style2.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="room-style2-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="room-style2-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">BLOG</a>
                    <ul class="submenu">
                    <li class="menu-item dropdown">
                        <a href="#">Blog Archive</a>
                        <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">List View</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="blog.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Classic View</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="blog-classic.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-classic-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-classic-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Grid View</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="blog-grid.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-grid-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-grid-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#">Blog Post</a>
                        <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Style 1</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="blog-post.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-post-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-post-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Style 2</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="blog-post-style2.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-post-style2-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="blog-post-style2-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">PAGES</a>
                    <ul class="submenu">
                    <li class="menu-item dropdown">
                        <a href="#">Gallery</a>
                        <ul class="submenu">
                        <li class="menu-item">
                            <a href="gallery.html">Gallery 4 Columns</a>
                        </li>
                        <li class="menu-item">
                            <a href="gallery-3columns.html">Gallery 3 Columns</a>
                        </li>
                        <li class="menu-item">
                            <a href="gallery-2columns.html">Gallery 2 Columns</a>
                        </li>
                        <li class="menu-item">
                            <a href="gallery-without-filters.html">Gallery Without Filters</a>
                        </li>
                        <li class="menu-item">
                            <a href="gallery-slider.html">Gallery Slider</a>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#">More Pages</a>
                        <ul class="submenu">
                        <li class="menu-item">
                            <a href="places.html">Places</a>
                        </li>
                        <li class="menu-item">
                            <a href="place-details.html">Place Details</a>
                        </li>
                        <li class="menu-item">
                            <a href="events.html">Events</a>
                        </li>
                        <li class="menu-item">
                            <a href="event-details.html">Event Details</a>
                        </li>
                        <li class="menu-item">
                            <a href="offers.html">Offers</a>
                        </li>
                        <li class="menu-item">
                            <a href="offer.html">Offer Details</a>
                        </li>
                        <li class="menu-item">
                            <a href="staff.html">Our Staff</a>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Loading Page</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="loading.html">Loading Page 1</a>
                            </li>
                            <li class="menu-item">
                                <a href="loading-style2.html">Loading Page 2</a>
                            </li>
                            <li class="menu-item">
                                <a href="loading-style3.html">Loading Page 3</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Coming Soon</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="coming-soon.html">Coming Soon Image</a>
                            </li>
                            <li class="menu-item">
                                <a href="coming-soon-video.html">Coming Soon Video</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="page.html">Right Sidebar Page</a>
                        </li>
                        <li class="menu-item">
                            <a href="page-left-sidebar.html">Left Sidebar Page</a>
                        </li>
                        <li class="menu-item">
                            <a href="page-full-width.html">Full Width Page</a>
                        </li>
                        <li class="menu-item">
                            <a href="404.html">404 Style 1</a>
                        </li>
                        <li class="menu-item">
                            <a href="404-style2.html">404 Style 2</a>
                        </li>
                        <li class="menu-item">
                            <a href="testimonials.html">Testimonials</a>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#">Contact</a>
                        <ul class="submenu">
                        <li class="menu-item">
                            <a href="contact.html">Contact Style 1</a>
                        </li>
                        <li class="menu-item">
                            <a href="contact-style2.html">Contact Style 2</a>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="#">Shop</a>
                        <ul class="submenu">
                        <li class="menu-item dropdown">
                            <a href="#">Shop</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="shop.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        <li class="menu-item dropdown">
                            <a href="#">Shop Details</a>
                            <ul class="submenu">
                            <li class="menu-item">
                                <a href="shop-details.html">Right Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop-details-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li class="menu-item">
                                <a href="shop-details-full-width.html">Full Width</a>
                            </li>
                            </ul>
                        </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="restaurant.html">Our Restaurant</a>
                    </li>
                    <li class="menu-item">
                        <a href="spa.html">Our Spa</a>
                    </li>
                    <li class="menu-item">
                        <a href="about-us.html">About Us</a>
                    </li>
                    <li class="menu-item">
                        <a href="location.html">Our Location</a>
                    </li>
                    </ul>
                </li>
                <li class="menu-item dropdown">
                    <a href="#">ELEMENTS</a>
                    <ul class="submenu">
                    <li class="menu-item">
                        <a href="style-guide.html">Style Guide</a>
                    </li>
                    <li class="menu-item">
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li class="menu-item">
                        <a href="icons.html">Icons</a>
                    </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="contact.html">CONTACT US</a>
                </li>
                <li class="menu-item menu-btn">
                    <a href="booking-form.html" class="btn">
                    <i class="fa fa-calendar"></i>
                    BOOK ONLINE</a>
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
    @yield('scripts')
  </body>
</html>