<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Hubungi Kami</title>
  <link href="https://cdn-icons-png.freepik.com/128/3197/3197378.png" rel="shorcut icon">

  <!--- Boostrap CSS ---->
  <link rel="stylesheet" href="<?= base_url() ?>/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/asset/fonts/remixicon.css">
  <link rel="stylesheet" href="<?= base_url() ?>/asset/css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="floating-wpp.min.js"></script>
  <link rel="stylesheet" href="floating-wpp.min.css">
</head>

<style>
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
</style>

<!--- Contact Us-->

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="<?= base_url('/asset/' . $prs['logo']) ?>" alt=""></h1>
      <h1 class="logo me-auto" style="float: left;"><?= $prs['nama'] ?></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="">About</a></li>
          <li><a class="nav-link scrollto" href="">Portfolio</a></li>
          <li><a class="nav-link scrollto active" href="/hubungikami">Contact</a></li>
          <li><a class="getstarted scrollto" href="">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <section id="contact">
    <div class="container border-light">
      <div class="row">
        <div class="col-12 section-intro">
          <h1> Hubungi Kami</h1>
          <p>Kami Senang Menjawab Pertanyaan dan Menerima Saran Anda </p>
        </div>
      </div>

      <!-- allert -->
      <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
          </svg>
          <div>
            <?= session()->getFlashdata('success') ?>
          </div>
        </div>
      <?php endif; ?>


      <div class="row bg-light">
        <div class="col-lg-7">
          <form action="" method='POST' class="row gy-3 gx-3 p-4 plg-5 ">
            <div class="form-group col-lg-12">
              <input type="text" name="nama" class="form-control" placeholder="Enter your Name">
            </div>
            <div class="form-group col-lg-12">
              <input type="email" name="email" class="form-control" placeholder="Enter your E-mail address">
            </div>
            <div class="form-group col-lg-12">
              <textarea rows="6" name="pesan" class="form-control" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn" name="send" style="background-color:purple; color:white">SEND MESSAGE</button>
            </div>
          </form>
        </div>
        <div class="col-lg-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d526.3223425745699!2d109.63856751890724!3d-6.960602094128466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1699167150331!5m2!1sid!2sid" class="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!---- WA Button Start --->
  <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
  <div class="elfsight-app-16541a0b-985e-4dcb-93ed-89abe1f9b4e3" data-elfsight-app-lazy></div>
  <!---- WA Button End --->

</body>

</html>