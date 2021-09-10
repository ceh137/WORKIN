<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zobstar - Job Board  HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,&display=swap" rel="stylesheet">
    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset("assets/css/line-awesome.css") }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area header-area-2">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"></a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                            <li><a href="index3.html">Home 3</a></li>
                                            <li><a href="index4.html">Home 4 <span class="new-page-badge">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Employers <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="employer-listing.html">Employer Listing</a></li>
                                            <li><a href="employer-details.html">Employer Details</a></li>
                                            <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                                            <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Candidates <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="candidate-listing.html">Candidate Listing</a></li>
                                            <li><a href="candidate-details.html">Candidate Details</a></li>
                                            <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                                            <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                                            <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="all-category.html">All Category <span class="new-page-badge">New</span></a></li>
                                            <li><a href="invoice.html">Invoice</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="how-it-works.html">How It Works</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="payment-complete.html">Payment Complete</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                            <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                                            <li><a href="recover.html">Recover Password</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="blog-single.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Jobs <i class="la la-angle-down"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="job-listing.html">Job Listing</a></li>
                                            <li><a href="job-grid-view.html">Job Grid View</a></li>
                                            <li><a href="job-details.html">Job Details </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                <li>
                                    <a href="login.html">Login</a>
                                    <span class="or-text">or</span>
                                    <a href="sign-up.html">Sign up</a>
                                </li>
                                <li>
                                    <a href="employer-dashboard-post-job.html" class="theme-btn">
                                        <span class="la la-plus"></span>
                                        Post a Job
                                    </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">Home <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4 <span class="new-page-badge">New</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Employers <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="employer-listing.html">Employer Listing</a></li>
                        <li><a href="employer-details.html">Employer Details</a></li>
                        <li><a href="employer-dashboard.html">Employer Dashboard</a></li>
                        <li><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="employer-dashboard-post-job.html">Post a Job</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Candidates <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="candidate-listing.html">Candidate Listing</a></li>
                        <li><a href="candidate-details.html">Candidate Details</a></li>
                        <li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
                        <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                        <li><a href="candidate-add-resume.html">Add a Resume</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="all-category.html">All Category <span class="new-page-badge">New</span></a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="how-it-works.html">How It Works</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="payment-complete.html">Payment Complete</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="page-404.html">404 Page</a></li>
                        <li><a href="terms-and-condition.html">Terms And Condition</a></li>
                        <li><a href="recover.html">Recover Password</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="blog-grid.html">Blog Grid</a></li>
                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="blog-single.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Jobs <i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="job-listing.html">Job Listing</a></li>
                        <li><a href="job-grid-view.html">Job Grid View</a></li>
                        <li><a href="job-details.html">Job Details </a></li>
                    </ul>
                </li>
            </ul>
            <div class="side-nav-button">
                <a href="login.html">Login</a>
                <span class="or-text">or</span>
                <a href="sign-up.html">Sign up</a>
                <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

@yield('index_content')

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area padding-top-90px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 responsive-column">
                <div class="footer-item">
                    <div class="logo">
                        <a href="index.html" class="foot-logo"><img src="{{ asset('assets/img/logo2.png') }}" alt="logo"></a>
                        <p class="footer__desc line-height-30 mt-3">
                            Collin Street West, Victor 6007, Australia. <br>
                            +1 246-345-0695 <br>
                            info@Zobstar123.com
                        </p>
                        <h4 class="footer__title mt-4">Connect with us</h4>
                        <ul class="social-profile">
                            <li>
                                <a href="#">
                                    <i class="la la-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="la la-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="la la-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="la la-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="la la-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end logo -->
                </div><!-- end footer-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-2 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">General</h4>
                    <ul class="list-items">
                        <li><a href="about.html">About / Press</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="blog-grid.html">Blog</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Guidelines</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-2 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Job Seekers</h4>
                    <ul class="list-items">
                        <li><a href="#">International Jobs</a></li>
                        <li><a href="#">Upload Resume</a></li>
                        <li><a href="#">Resume Help</a></li>
                        <li><a href="#">Career Advice</a></li>
                        <li><a href="#">Salary Tools</a></li>
                        <li><a href="#">Site map</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-2 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Employers</h4>
                    <ul class="list-items">
                        <li><a href="#">Get a Free Employer</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Employer Center</a></li>
                        <li><a href="#">Post a Job</a></li>
                        <li><a href="#">Recruiting Solutions</a></li>
                        <li><a href="#">Screening</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
            <div class="col-lg-2 responsive-column">
                <div class="footer-item">
                    <h4 class="footer__title">Helpful Links</h4>
                    <ul class="list-items">
                        <li><a href="#">Help / Contact Us</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Center</a></li>
                        <li><a href="#">Security Center</a></li>
                        <li><a href="#">Do Not Sell</a></li>
                        <li><a href="#">AdChoices</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-2 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="copy-right margin-top-50px padding-top-30px">
                    <p class="copy__desc">
                        Copyright &copy;2020 Zobstar Inc. Made with
                        <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                    <ul class="list-items">
                        <li class="color-text-2 font-weight-medium">Browse by:</li>
                        <li><a href="#">Companies,</a></li>
                        <li><a href="#">Jobs,</a></li>
                        <li><a href="#">Locations</a></li>
                    </ul>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src=" {{ asset('assets/js/jquery-3.4.1.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery-ui.js') }} "></script>
<script src=" {{ asset('assets/js/popper.min.js') }} "></script>
<script src=" {{ asset('assets/js/bootstrap.min.js') }} "></script>
<script src=" {{ asset('assets/js/owl.carousel.min.js') }} "></script>
<script src=" {{ asset('assets/js/jquery.magnific-popup.min.js') }} "></script>
<script src=" {{ asset('assets/js/isotope-3.0.6.min.js') }} "></script>
<script src=" {{ asset('assets/js/chosen.min.js') }} "></script>
<script src=" {{ asset('assets/js/moment.min.js') }} "></script>
<script src=" {{ asset('assets/js/daterangepicker.js') }}"></script>
<script src=" {{ asset('assets/js/purecounter.js') }} "></script>
<script src=" {{ asset('assets/js/progresscircle.js') }} "></script>
<script src=" {{ asset('assets/js/main.js') }} "></script>
</body>
</html>


