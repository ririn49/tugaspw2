<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TugasWeb</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdn-icons-png.freepik.com/128/3197/3197378.png" rel="shorcut icon">
    <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" href="">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            font-family: "Open Sans", sans-serif;
            color: #444444;
        }

        a {
            color: #47b2e4;
            text-decoration: none;
        }

        a:hover {
            color: #73c5eb;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Jost", sans-serif;
        }

        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
        #header {
            transition: all 0.5s;
            z-index: 997;
            padding: 15px 0;
        }

        #header .logo {
            font-size: 30px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        #header .logo a {
            color: #37517e;
        }

        #header .logo img {
            max-height: 40px;
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /**
* Desktop Navigation 
*/
        .navbar {
            padding: 0;
            display: flex;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 10px 30px;
            font-size: 15px;
            font-weight: 500;
            color: purple;
            white-space: nowrap;
            transition: 0.3s;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #000;
        }

        .navbar .getstarted,
        .navbar .getstarted:focus {
            padding: 8px 10px;
            margin-left: 30px;
            border-radius: 10px;
            color: #000;
            font-size: 14px;
            border: 2px solid #d267cd;
            font-weight: 600;
        }

        .navbar .getstarted:hover,
        .navbar .getstarted:focus:hover {
            color: #fff;
            background: #d267cd;
        }

        /**
* Mobile Navigation 
*/
        .mobile-nav-toggle {
            color: #000;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
        }

        .mobile-nav-toggle.bi-x {
            color: #000;
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navbar ul {
                display: none;
            }
        }

        .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(40, 58, 90, 0.9);
            transition: 0.3s;
            z-index: 999;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            border-radius: 10px;
            background-color: #000;
            overflow-y: auto;
            transition: 0.3s;
        }

        .navbar-mobile a,
        .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #d267cd;
        }

        .navbar-mobile a:hover,
        .navbar-mobile .active,
        .navbar-mobile li:hover>a {
            color: #d267cd;
        }

        .navbar-mobile .getstarted,
        .navbar-mobile .getstarted:focus {
            margin: 15px;
            color: #d267cd;
        }

        /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
        #hero {
            width: 100%;
            height: 80vh;
            background: #fff;
        }

        #hero .container {
            padding-top: 72px;
        }


        #hero h1 {
            margin: 0 0 10px 0;
            font-size: 35px;
            font-weight: 700;
            line-height: 56px;
            color: purple;
            font-family: 'Times New Roman', Times, serif;
        }

        #hero h2 {
            color: #000;
            margin-bottom: 50px;
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        #hero h3 {
            margin: 0 0 10px 0;
            font-size: 24px;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            line-height: 40px;
            color: #000;
            font-family: 'Times New Roman', Times, serif;
        }

        #hero .btn-get-started {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-size: 12px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 7px 15px 7px 15px;
            border-radius: 2px;
            transition: 0.5s;
            margin: 10px 0 0 0;
            color: #000;
            background: #d267cd;
        }

        #hero .btn-get-started:hover {
            background: #d267cd;
            color: #fff;
        }

        #hero .btn-watch-video {
            font-size: 16px;
            display: flex;
            align-items: center;
            transition: 0.5s;
            margin: 10px 0 0 25px;
            color: #000;
            line-height: 1;
        }


        @media (max-width: 991px) {
            #hero {
                height: 100vh;
                text-align: center;
            }

            /* #hero .animated {
                animation: none;
            } */

            #hero .hero-img {
                text-align: center;
            }

            #hero .hero-img img {
                width: 60%;
            }
        }

        @media (max-width: 768px) {
            #hero h1 {
                font-size: 28px;
                line-height: 36px;
                font-family: 'Times New Roman', Times, serif;
            }

            #hero h2 {
                font-size: 18px;
                line-height: 24px;
                margin-bottom: 30px;
                font-family: 'Times New Roman', Times, serif;
            }

            #hero h3 {
                font-size: 23px;
                line-height: 20px;
                margin-bottom: 30px;
                font-family: 'Times New Roman', Times, serif;
            }

            #hero .hero-img img {
                width: 70%;
            }
        }

        @media (max-width: 575px) {
            #hero .hero-img img {
                width: 60%;
            }

            #hero .btn-get-started {
                font-size: 12px;
                padding: 10px 24px 11px 24px;
            }
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><img src="<?= base_url('/asset/' . $prs['logo']) ?>" alt=""></h1>
            <h1 class="logo me-auto" style="float: left;"><?= $prs['nama'] ?></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li><a class="nav-link scrollto" href="">About</a></li>
                    <li><a class="nav-link scrollto" href="">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="/hubungikami">Contact</a></li>
                    <li><a class="getstarted scrollto" href="">Sign In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3><?= $prs['visi'] ?></h3>
                    <h1><?= $prs['misi'] ?></h1>
                    <h2><?= $prs['detail'] ?></h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="" class="btn-get-started scrollto">READ MORE</a>
                        <span class="glightbox btn-watch-video">Or Follow Us</span>
                        <!-- <a href="" class="glightbox btn-watch-video"><span>Or Follow Us</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://img.freepik.com/free-vector/back-end-concept-illustration_114360-22210.jpg" class="img-fluid animated" width="400px" height="400px" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>