<!doctype html>
<html class="no-js" lang="zxx">

@include('client/layout/header')
<body class="gradient-body">

    <div class="cursor"></div>
    <div class="cursor2"></div>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here 
	******************************** -->



    @include('client/layout/load')
    <!--==============================
     Preloader
  ==============================-->
     <!--==============================
    Sidemenu
============================== -->
@include('client/layout/menu')

  <!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout2">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-map-location"></i>54 NJ-12, Flemington, United States</li>
                                <li><i class="fas fa-phone"></i><a href="tel:+1539873657">+153-987-3657</a></li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:info@webteck.com">info@webteck.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-social">
                            <span class="social-title">Follow Us On : </span>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a class="icon-masking" href="index.html"><span data-mask-src="client/img/logo.svg" class="mask-icon"></span><img src="client/img/logo.svg" alt="Webteck"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Digital Agency</a></li>
                                            <li><a href="home-web-development.html">Web Development</a></li>
                                            <li><a href="home-software-company.html">Software Company</a></li>
                                            <li><a href="home-startup-company.html">Startup Company</a></li>
                                            <li><a href="home-it-solution.html">IT Solution</a></li>
                                            <li><a href="home-web-agency.html">Web Agency</a></li>
                                            <li><a href="home-sass-landing.html">Sass Landing</a></li>
                                            <li><a href="home-app-landing.html">App Landing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="project.html">Project</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="faq.html">Faq Page</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="icon-btn sideMenuToggler d-inline-block d-lg-none">
                                    <i class="far fa-shopping-cart"></i>
                                    <span class="badge">5</span>
                                </button>
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <button type="button" class="icon-btn searchBoxToggler"><i class="far fa-search"></i></button>
                                <button type="button" class="icon-btn sideMenuToggler">
                                    <i class="far fa-shopping-cart"></i>
                                    <span class="badge">5</span>
                                </button>
                                <a href="contact.html" class="th-btn shadow-none">Make Appointment<i class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--==============================
Hero Area
==============================-->
 @yield('content')   
<!--==============================
	Footer Area
==============================-->
   @include('client/layout.footer')
    <div class="body-particle" id="body-particle"></div>

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>


    <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    @include('client/layout.js')
</body>

</html>