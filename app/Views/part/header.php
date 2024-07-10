<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sportify - Field Booking</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/logo-title.png') ?>">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('template/fonts/line-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
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
                                <img src="<?= base_url('assets/logo-sportify-white.png') ?>" alt="image" height="100px">
                                <img src="<?= base_url('assets/logo-sportify.png') ?>" alt="image" height="100px">
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
                            <?php if (session()->get('logged_in')): ?>
                                <a href="/logout" class="mr-2"><i class="icon-logout mr-1"></i> Logout</a>
                            <?php else: ?>
                                <a href="/register" class="mr-2"><i class="icon-user mr-1"></i> Register</a>
                                <a href="/login"><i class="icon-login mr-1"></i> Login</a>
                            <?php endif; ?>
                        </div>

                        <div id="slicknav-mobile"></div>
                    </div>
                </div><!-- /.container-fluid --> 
            </nav>
        </div>
        <!-- Navigation Bar Ends -->
    </header>
    <!-- header ends -->