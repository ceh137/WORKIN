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
<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="index.html"><img src="images/logo2.png" alt="logo"></a>
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
                            <div class="header-action-button d-flex align-items-center">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-bell"></i>
                                                <span class="quantity">5</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="notificationDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title">
                                                        <h4 class="widget-title d-flex align-items-center justify-content-between">Notifications<a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                        <p class="font-size-12 font-weight-medium">You have 5 Notifications</p>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Your Resume Updated!</p>
                                                                    <span class="time">5 hours ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">You changed password</p>
                                                                    <span class="time">2 day ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-check-circle"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                                                    <span class="time">1 day ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Your account has been created successfully</p>
                                                                    <span class="time">1 minute ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="#" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="icon-element">
                                                                    <i class="la la-download"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <p class="text">Someone downloaded resume</p>
                                                                    <span class="time">Yesterday</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                    </div><!-- end mess__body -->
                                                    <div class="mess__item border-bottom-0 text-center">
                                                        <a href="#" class="theme-btn w-100">View All Notifications</a>
                                                    </div><!-- end mess__item -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                    <div class="notification-item mr-3">
                                        <div class="dropdown">
                                            <button class="notification-btn dropdown-toggle" type="button" id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-envelope"></i>
                                                <span class="quantity">5</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="messageDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title">
                                                        <h4 class="widget-title d-flex align-items-center justify-content-between">Message <a href="#" class="font-size-12 color-text-3">Mark all as read</a></h4>
                                                        <p class="font-size-12 font-weight-medium">You have 5 new messages</p>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <a href="candidate-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="candidate-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="candidate-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Michelle Moreno</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">5 min ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="candidate-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status online-status">
                                                                    <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                        <a href="candidate-dashboard-message.html" class="d-block">
                                                            <div class="mess__item">
                                                                <div class="avatar dot-status">
                                                                    <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="widget-title">Alex Smith</h4>
                                                                    <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                                                    <span class="time">2 days ago</span>
                                                                </div>
                                                            </div><!-- end mess__item -->
                                                        </a>
                                                    </div><!-- end mess__body -->
                                                    <div class="mess__item border-bottom-0 text-center">
                                                        <a href="#" class="theme-btn w-100">View All Messages</a>
                                                    </div><!-- end mess__item -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                                <div class="user-action-wrap">
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img src="images/small-team1.jpg" alt="John-doe">
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                <div class="mess-dropdown">
                                                    <div class="mess__title d-flex align-items-center">
                                                        <div class="image dot-status online-status">
                                                            <a href="#">
                                                                <img src="images/small-team1.jpg" alt="John Doe">
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h4 class="widget-title font-size-16">
                                                                <a href="#">Ali Tupan</a>
                                                            </h4>
                                                            <span class="email">alitupan@example.com</span>
                                                        </div>
                                                    </div><!-- end mess__title -->
                                                    <div class="mess__body">
                                                        <ul class="list-items">
                                                            <li class="mb-0">
                                                                <a href="candidate-dashboard.html" class="d-block">
                                                                    <i class="la la-user"></i> Account
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="candidate-dashboard-bookmark.html" class="d-block">
                                                                    <i class="la la-bookmark"></i> Bookmarks
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="candidate-add-resume.html" class="d-block">
                                                                    <i class="la la-plus"></i> Add a Resume
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="candidate-dashboard.html" class="d-block">
                                                                    <i class="la la-question"></i> Help
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="candidate-dashboard.html" class="d-block">
                                                                    <i class="la la-gear"></i> Setting
                                                                </a>
                                                            </li>
                                                            <li class="mb-0">
                                                                <div class="section-block mt-2 mb-2"></div>
                                                            </li>
                                                            <li class="mb-0">
                                                                <a href="index.html" class="d-block">
                                                                    <i class="la la-power-off"></i> Logout
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- end mess__body -->
                                                </div><!-- end mess-dropdown -->
                                            </div><!-- end dropdown-menu -->
                                        </div><!-- end dropdown -->
                                    </div>
                                </div>
                            </div>
                            <div class="menu-toggler d-flex align-items-center">
                                <div class="side-menu-open">
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                    <span class="menu__bar"></span>
                                </div><!-- end side-menu-open -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
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
                <a href="candidate-add-resume.html" class="theme-btn">Add a Resume</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
    <div class="user-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="user-panel-nav">
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification-home" role="tab" aria-controls="notification-home" aria-selected="true">
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="message-tab" data-toggle="tab" href="#message-home" role="tab" aria-controls="message-home" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab" aria-controls="account-home" aria-selected="false">Account</a>
                </li>
            </ul>
        </div>
        <div class="user-panel-content">
            <div class="tab-content" id="tab-tabContent">
                <div class="tab-pane fade show active" id="notification-home" role="tabpanel" aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your Resume Updated!</p>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You changed password</p>
                                            <span class="time">2 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your account has been created successfully</p>
                                            <span class="time">1 minute ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-download"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Someone downloaded resume</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Application has been approved</p>
                                            <span class="time">1 hour ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-flag"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New report has been received</p>
                                            <span class="time">10 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bell-o"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">New user feedback received</p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="message-home" role="tabpanel" aria-labelledby="message-tab">
                    <div class="user-sidebar-item">
                        <div class="mess-dropdown">
                            <div class="mess__body">
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="images/small-team1.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="images/small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="images/small-team6.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="candidate-dashboard-message.html" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="images/small-team6.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Kamran Adi</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="mess-dropdown">
                            <div class="mess__title d-flex align-items-center">
                                <div class="image dot-status online-status">
                                    <a href="#">
                                        <img src="images/small-team3.jpg" alt="John Doe">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="widget-title">
                                        <a href="#">John doe</a>
                                    </h4>
                                    <span class="email">alitupan@example.com</span>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body">
                                <a href="candidate-dashboard.html" class="d-block">
                                    <i class="la la-user"></i> Account
                                </a>
                                <a href="candidate-dashboard-bookmark.html" class="d-block">
                                    <i class="la la-bookmark"></i> Bookmarks
                                </a>
                                <a href="candidate-add-resume.html" class="d-block">
                                    <i class="la la-plus"></i> Add a Resume
                                </a>
                                <a href="candidate-dashboard.html" class="d-block">
                                    <i class="la la-question"></i> Help
                                </a>
                                <a href="candidate-dashboard.html" class="d-block">
                                    <i class="la la-gear"></i> Setting
                                </a>
                                <div class="section-block mt-2 mb-2"></div>
                                <a href="index.html" class="d-block">
                                    <i class="la la-power-off"></i> Logout
                                </a>
                            </div><!-- end mess__body -->
                        </div><!-- end mess-dropdown -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Navigation
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li class="page-active"><a href="candidate-dashboard.html"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
                    <li><a href="candidate-dashboard-message.html"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
                    <li><a href="candidate-dashboard-bookmark.html"><i class="la la-bookmark icon-element"></i> Bookmarks</a></li>
                    <li>
                        <a href="#"><i class="la la-bell-o icon-element"></i>jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="candidate-dashboard-applied-job.html"> Applied Jobs</a></li>
                            <li><a href="candidate-job-alert.html">Jobs Alerts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="la la-cog icon-element"></i>Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="candidate-dashboard-edit-profile.html">Edit Profile</a></li>
                            <li><a href="candidate-dashboard-change-password.html">Change Password</a></li>
                        </ul>
                    </li>
                    <li><a href="candidate-dashboard-employer-following.html"><i class="la la-user-plus icon-element"></i> Following Employer</a></li>
                    <li>
                        <a href="my-resume.html"><i class="la la-file-text icon-element"></i> Resumes <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="cv-and-cover-letter.html">CV & Cover Letter</a></li>
                            <li><a href="candidate-add-resume.html">Add Resume</a></li>
                            <li><a href="my-resume.html">Education</a></li>
                            <li><a href="my-resume.html">Experience</a></li>
                            <li><a href="my-resume.html">Skills</a></li>
                            <li><a href="my-resume.html">Video</a></li>
                        </ul>
                    </li>
                    <li><div class="section-block mt-3 mb-3"></div></li>
                    <li><a href="candidate-details.html"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="index.html"><i class="la la-power-off icon-element"></i> Logout</a></li>
                    <li><a href="javascript:void(0)" data-toggle="modal" data-target=".account-delete-modal" ><i class="la la-trash icon-element"></i> Delete Account</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
            <div class="skillbar-wrap mt-4">
                <h3 class="widget-title font-size-16">Skill Percentage</h3>
                <div class="skillbar" data-percent="85%">
                    <div class="skill-item"><span>85%</span></div>
                </div>
                <p>You're almost done set "Cover Image" field to increase your skill up to "15%"</p>
            </div>
        </div>
    </div><!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">

        @yield('dashboard_content')

        <!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="modal-title mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="theme-btn border-0" data-dismiss="modal">Cancel</button>
                    <button type="button" class="theme-btn border-0 button-danger">Delete!</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->



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
<script src=" {{ asset('assets/js/daterangepicker.j') }} s"></script>
<script src=" {{ asset('assets/js/purecounter.js') }} "></script>
<script src=" {{ asset('assets/js/progresscircle.js') }} "></script>
<script src=" {{ asset('assets/js/main.js') }} "></script>
</body>
</html>


