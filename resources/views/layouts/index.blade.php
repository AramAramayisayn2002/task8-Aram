<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Findeo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    @vite(['resources/css/app.css'])
    @vite(['public/css/bootstrap.css'])
    @vite(['public/css/color.css'])
    @vite(['public/css/icons.css'])
    @vite(['public/css/style.css'])
</head>
<body>
<header id="header-container">
    <!-- Topbar -->
    <div id="top-bar">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Top bar -->
                <ul class="top-bar-menu">
                    <li><i class="fa fa-phone"></i> (123) 123-456</li>
                    <li><i class="fa fa-envelope"></i> <a href="#">office@example.com</a></li>
                    <li>
                        <div class="top-bar-dropdown">
                            <span>Dropdown Menu</span>
                            <ul class="options">
                                <li>
                                    <div class="arrow"></div>
                                </li>
                                <li><a href="#">Nice First Link</a></li>
                                <li><a href="#">Second Link With Long Title</a></li>
                                <li><a href="#">Third Link</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Left Side Content / End -->
            <!-- Left Side Content -->
            <div class="right-side">
                <!-- Social Icons -->
                <ul class="social-icons">
                    <li><a class="facebook" href="https://www.facebook.com/?locale=ru_RU"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="https://twitter.com/?lang=ru"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="https://myaccount.google.com/profile"><i class="icon-gplus"></i></a></li>
                    <li><a class="pinterest" href="https://www.pinterest.com/"><i class="icon-pinterest"></i></a></li>
                </ul>
            </div>
            <!-- Left Side Content / End -->
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- Topbar / End -->
    <!-- Header -->
    <div id="header">
        <div class="container">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{route('index')}}"><img src="images/logo.png" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a class="current" href="#">Home</a>
                            <ul>
                                <li><a href="{{route('index')}}">Home 1</a></li>
                                <li><a href="{{route('index')}}">Home 2</a></li>
                                <li><a href="{{route('index')}}">Home 3</a></li>
                                <li><a href="{{route('index')}}">Home 4</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Listings</a>
                            <ul>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                        <li><a href="listings-list-with-map.html">With Map</a></li>
                                        <li><a href="listings-list-full-width.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="listings-grid-standard-with-sidebar.html">Standard With Sidebar</a></li>
                                        <li><a href="listings-grid-compact-with-sidebar.html">Compact With Sidebar</a></li>
                                        <li><a href="listings-grid-with-map.html">With Map</a></li>
                                        <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Half Map</a>
                                    <ul>
                                        <li><a href="listings-half-map-list.html">List Layout</a></li>
                                        <li><a href="listings-half-map-grid-standard.html">Grid Standard Layout</a></li>
                                        <li><a href="listings-half-map-grid-compact.html">Grid Compact Layout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Features</a>
                            <ul>
                                <li><a href="#">Single Properties</a>
                                    <ul>
                                        <li><a href="single-property-page-1.html">Property Style 1</a></li>
                                        <li><a href="single-property-page-2.html">Property Style 2</a></li>
                                        <li><a href="single-property-page-3.html">Property Style 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Search Styles</a>
                                    <ul>
                                        <li><a href="1index.html">Home Search 1</a></li>
                                        <li><a href="index-2.html">Home Search 2</a></li>
                                        <li><a href="index-3.html">Home Search 3</a></li>
                                        <li><a href="listings-list-full-width.html">Advanced Style</a></li>
                                        <li><a href="listings-list-with-sidebar.html">Sidebar Search</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">My Account</a>
                                    <ul>
                                        <li><a href="my-profile.html">My Profile</a></li>
                                        <li><a href="my-bookmarks.html">Bookmarked Listings</a></li>
                                        <li><a href="my-properties.html">My Properties</a></li>
                                        <li><a href="change-password.html">Change Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Agencies & Agents</a>
                                    <ul>
                                        <li><a href="agencies-list.html">Agencies List</a></li>
                                        <li><a href="agency-page.html">Agency Page</a></li>
                                        <li><a href="agents-list.html">Agents List</a></li>
                                        <li><a href="agent-page.html">Agent Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="compare-properties.html">Compare Properties</a></li>
                                <li><a href="submit-property.html">Submit Property</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-post.html">Blog Post</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="icons.html">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / End -->
            <div class="right-side">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{route('loginPage')}}" class="sign-in"><i class="fa fa-user"></i> Log In /
                        Register</a>
                    <a href="" class="button border">Submit Property</a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>
@yield('structure')
<!-- Footer ================================================== -->
<div id="footer" class="sticky-footer">
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <img class="footer-logo" src="images/logo.png" alt="">
                <br><br>
                <p>Morbi convallis bibendum urna ut viverra. Maecenas quis consequat libero, a feugiat eros. Nunc ut
                    lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper.</p>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <h4>Helpful Links</h4>
                <ul class="footer-links">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Add Property</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Our Agents</a></li>
                    <li><a href="#">How It Works</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-3  col-sm-12">
                <h4>Contact Us</h4>
                <div class="text-widget">
                    <span>12345 Little Lonsdale St, Melbourne</span> <br>
                    Phone: <span>(123) 123-456 </span><br>
                    E-Mail:<span> <a href="#">office@example.com</a> </span><br>
                </div>
                <ul class="social-icons margin-top-20">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="vimeo" href="#"><i class="icon-vimeo"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights">© 2016 Findeo. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
<!-- Footer / End -->
<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>
@vite(['public/scripts/bootstrap.js'])
@vite(['public/scripts/jquery.js'])
@vite(['resources/scripts/jquery-3.4.1.min.js'])
@vite(['public/scripts/jquery-migrate-3.1.0.min.js'])
@vite(['public/scripts/chosen.min.js'])
@vite(['public/scripts/magnific-popup.min.js'])
@vite(['public/scripts/owl.carousel.min.js'])
@vite(['public/scripts/rangeSlider.js'])
@vite(['public/scripts/sticky-kit.min.js'])
@vite(['public/scripts/slick.min.js'])
@vite(['public/scripts/masonry.min.js'])
@vite(['public/scripts/mmenu.min.js'])
@vite(['public/scripts/tooltips.min.js'])
@vite(['public/scripts/custom.js'])
</body>
</html>
