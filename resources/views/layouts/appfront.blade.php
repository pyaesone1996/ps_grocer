<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="assets/images/favicon/1.png" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/favicon/1.png" type="image/x-icon" />

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/landing_page.css">

    <!-- animation css -->
    <link rel="stylesheet" href="assets/css/vendors/animate.css">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/vendors/font-awesome.css')}}>
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/vendors/themify-icons.css')}}>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])


    <title>Multikart</title>

</head>

<body class="pb-0" data-spy="scroll" data-bs-target="#scroll-spy">


    <!--header start-->
    <!-- <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col p-0">
                    <div class="top-header">
                        <div class="logo d-flex ps-2">
                            <a class="navbar-brand" href="#"><img src="assets/images/landing-page/header/logo.png"
                                    alt="logo"></a>
                        </div>
                        <div class="main-menu mx-auto" id="nav">
                            <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#scroll-spy" aria-controls="scroll-spy" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="scroll-spy">
                                    <ul class="navbar-nav mx-auto nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#img-bg">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#feature">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#frontend">frontend</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#admin">admin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#special">special feature</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#inside">insides</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#core">core feature</a>
                                        </li>
                                        <li class="nav-item ">
                                            <form class="form-inline support-res" target="_blank"
                                                action="https://docs.google.com/forms/d/e/1FAIpQLSe6hKUXw_By-pg7yabL0FxoTM02ZPTxoXy8PE3yboRuUCuyeA/viewform">
                                                <button class=" bg-transparent nav-link border-0 c-pointer">Hire
                                                    Us</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div>
                            <form target="_blank" class="form-inline my-lg-0" action="https://1.envato.market/Abq1o">
                                <button class="btn my-sm-0 purchase-btn py-3">PURCHASE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->


    <!--header end-->

    <div>
        @yield('content')
    </div>

    <!--footer section start-->
    <!-- <section id="footer" class="section-b-space grey-bg footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-section">
                        <div>
                            <ul class="rate-section">
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                            <h2>purchase the multikart <br>
                                & create beautiful online store</h2>
                            <a target="_blank" href="https://1.envato.market/Abq1o"
                                class="btn btn-primary d-inline-block w-auto">purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--footer section end-->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top End -->


    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- wow js-->
    <script src="assets/js/wow.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- script js-->
    <script src="assets/js/landing-script.js"></script>


    <script>
        new WOW().init();
    </script>


</body>

</html>