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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">


  <style>

body{

    background-image:url('https://wallpapercave.com/wp/vhgYQou.jpg');

}
.text-white-50 { color: rgba(255, 255, 255, .5); }
.bg-blue { background-color:#00b5ec; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }
.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

</style>

</head>

<body>

 
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"> <img src="assets/img/logo.png"><a href="/">HousWork <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/workerdashboard" class="get-started-btn scrollto">HOME</a>
     
      

    </div>
  </header><!-- End Header -->
<br>
<br>
<br>
<br>
<br>


<main role="main" class="container bootdey.com">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-blue rounded box-shadow" style="background-color:#bbd3fa;">
  <img width="150" height="100" class="avatar" src="{{ URL::asset('assets/worker_img/'.$worker->Filepath) }}">
                    
     <div class="lh-100" style="margin-left:30px;">
      <h3 class="mb-0  lh-100" style="color:black;">{{$worker->Fname}} {{$worker->Lname}}</h3>
      <small style="color:black;">Messages</small>
    </div>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent Feedbacks</h6>
    @foreach($feedback as $feedback)
    <div class="media text-muted pt-3">
      <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <strong class="d-block text-gray-dark">@ {{$feedback->customer->Fname}}_ {{$feedback->customer->Lname}} </strong>
        {{$feedback->Feedback}}
      </p>
    </div>
    @endforeach
   
   
    <small class="d-block text-right mt-3">
      <a>Housework</a>
    </small>
  </div>
</main>

</body>

</html>