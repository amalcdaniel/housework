
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HousWork</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"> <img src="assets/img/logo.png"><a href="/">HousWork <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="\home">Home</a></li>
          <li><a class="nav-link scrollto" href="\feedback#hero">Feedback</a></li>

          
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="\viewteam#workers" class="get-started-btn scrollto">BOOK NOW</a>
     
      <a href="\logout" class="get-started-btn scrollto">LOG OUT</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="background-color:black;";>
    <div class="container" data-aos="fade-up">

    <body  >
   
        <div class="container" >
            <div class="row">
                <div class="col-md-6 " id="form_container">
                    <h2>Feedback Zone</h2> 
                    <br>
                    <p style="color:white;"> Please send your feedback below. We will make changes at the earliest! </p>
                    <form role="form" action="feedback" method="post" id="reused_form">
                    {{csrf_field()}}
                        <div class="row">
                            <input type="hidden" class="form-control" name="cid"value="{{ $data['id'] }}">
            
                            <div class="col-sm-12 form-group">
                    
                                <textarea class="form-control" name="feedback" type="textarea" id="message" name="message" maxlength="6000" rows="7" placeholder="Ente your feedback here"></textarea>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                    <select name="name" id="name" class="form-control">
                    <option>General Feedback</option>
                    @foreach($workerview as $worker)

                    
                    <option value="{{$worker->Email}}">{{$worker->Fname}} {{$worker->Lname}} </option>
                    @endforeach
                    </select>

                   
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                            <br>
                            <button class="btn btn-dark" style="width:150px;margin-left:300px;">Send -></button>
                            </div>
                        </div>
                    </form>
                    </div>
            </div>
        </div>
        </div>

    
  </section>






  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
    













    
    