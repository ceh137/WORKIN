@extends('layouts.main')
@section('content')


    <!-- ================================
       START FORM AREA
================================= -->
    <section class="form-shared padding-top-100px padding-bottom-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="billing-form-item mb-0">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title font-size-28">Reset Password!</h3>
                            <p class="font-size-15">Enter the email of your account to reset password.
                                Then you will receive a link to email to reset the password.If you have any
                                issue about reset password
                                <a href="contact.html" class="color-text">contact us</a>
                            </p>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                <form method="post">
                                    <div class="input-box">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="text" placeholder="Enter email address">
                                        </div>
                                    </div>
                                    <div class="btn-box margin-top-20px margin-bottom-20px">
                                        <button class="theme-btn border-0" type="submit">Reset Password</button>
                                    </div>
                                    <p>
                                        <a href="login.html" class="color-text">Login</a>
                                        or
                                        <a href="sign-up.html" class="color-text">Register</a>
                                    </p>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end form-shared -->
    <!-- ================================
           START FORM AREA
    ================================= -->

    <div class="section-block"></div>

@endsection
