<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yatriiworld - Travel and Tours Booking Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('template/images/favicon.png') ?>">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('template/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="<?= base_url('template/css/style.css') ?>" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="<?= base_url('template/css/plugin.css') ?>" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="<?= base_url('template/fonts/flaticon.css') ?>" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('template/fonts/line-icons.css') ?>" type="text/css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    <header class="main_header_area headerstye-1">
        <!-- Navigation Bar -->
        <div class="header_menu" id="header_menu">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-flex d-flex align-items-center justify-content-between w-100 pb-2 pt-2">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= base_url('template/images/logo-white.png') ?>" alt="image">
                                <img src="<?= base_url('template/images/logo.png') ?>" alt="image">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse1 d-flex align-items-center" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li><a href="/">Home</i></a></li>
                                <li><a href="/shop">Shop</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->   

                        <div class="register-login">
                            <a href="#" class="mr-2" data-toggle="modal" data-target="#register"><i class="icon-user mr-1"></i> Register</a>
                            <a href="#" data-toggle="modal" data-target="#login"><i class="icon-login mr-1"></i> Login</a>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->

    <!-- Register Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bordernone p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="login-content p-4 text-center">
                    <div class="login-title section-border">
                        <h3 class="pink mb-1">Register</h3>  
                        <p>Access thousands of online classes in design, business, and more!</p>                  
                    </div>
                    <div class="login-form text-center">
                        <form>
                            <div class="form-group">
                                <input type="text" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm password">
                            </div>
                        </form>
                        <div class="form-btn">
                            <a href="#" class="nir-btn">Register</a>
                        </div>
                        <div class="form-group mb-0 form-checkbox mt-3">
                            <input type="checkbox"> By clicking this, you are agree to to<a href="#" class=""> our terms of use</a> and <a href="#" class="">privacy policy</a> including the use of cookies
                        </div>
                    </div>
                    <div class="login-social border-t mt-3 pt-2 mb-3">
                        <p class="mb-2">OR continue with</p>
                        <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                        <a href="#" class="btn-google"><i class="fab fa-google" aria-hidden="true"></i> Google</a>
                    </div>
                    <div class="sign-up">
                        <p class="m-0">Already have an account? <a href="login.html" class="pink">Login</a></p>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bordernone p-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="login-content p-4 text-center">
                    <div class="login-title section-border">
                        <h3 class="pink">Login</h3>                    
                    </div>
                    <div class="login-form">
                        <form>
                            <div class="form-group">
                                <input type="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Enter password">
                            </div>
                        </form>
                        <div class="form-btn">
                            <a href="#" class="nir-btn">LOGIN</a>
                        </div>
                        <div class="form-group mb-0 form-checkbox mt-3">
                            <input type="checkbox"> Remember Me | <a href="#" class="">Forgot password?</a>
                        </div>
                    </div>
                    <div class="login-social border-t mt-3 pt-2 mb-3">
                        <p class="mb-2">OR continue with</p>
                        <a href="#" class="btn-facebook"><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a>
                        <a href="#" class="btn-twitter"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a>
                    </div>
                    <div class="sign-up">
                        <p class="m-0">Do not have an account? <a href="login.html" class="pink">Sign Up</a></p>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>