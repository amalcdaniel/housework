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

  <!-- =======================================================
  * Template Name: Gp - v4.1.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->



  <style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-image:url('https://wallpapercave.com/wp/vhgYQou.jpg');    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    color:white;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
    background: rgba(0,0,0,0.9);
    opacity: 0.75;
    

}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
    
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>

</head>

<body>

 
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"> <img src="assets/img/logo.png"><a>HousWork <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="\home" class="get-started-btn scrollto">HOME</a>
     
      

    </div>
  </header><!-- End Header -->
<br>
<br>
<br>
<br>
<br>








<div class="container">
    <div class="main-body">
    
        
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_1280.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ $data['Fname'] }} {{ $data['Lname'] }}</h4>
                      <p class="text-secondary mb-1">Customer</p>
                      <p class="text-muted font-size-sm">{{ $data['City'] }}</p>
                     
                    </div>
                  </div>
                </div>
              </div>
              <br><br>
              <h4 style="color:#00b33c"><strong><u>Today's Bookings</u></strong></h4>>
              
              @foreach($activebooking as $activebooking)
              <div class="card mt-3">
              
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Booking Date : </h6>
                    <span class="text-secondary">{{$activebooking->Date}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Booking Time : </h6>  <span class="text-secondary">{{$activebooking->Time}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Worker Name : </h6>   <span class="text-secondary">{{$activebooking->worker->Fname}} {{$activebooking->worker->Lname}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Problem Type : </h6>   <span class="text-secondary">{{$activebooking->category->Category}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Component : </h6>  <span class="text-secondary">{{$activebooking->subcategory->Subcategory}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Booking Location : </h6>  <span class="text-secondary">{{$activebooking->location->Location}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Payment : </h6>        <span class="text-secondary">{{$activebooking->subcategory->Payment}}</span>
                  </li>
                 

                </ul>
                </div>
              @endforeach
            </div>
        
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $data['Fname'] }} {{ $data['Lname'] }}</
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $data['Email']}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $data['Mob']}}
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ $data['Hno']}},{{ $data['Street']}},{{ $data['Pincode']}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Place</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   {{ $data['City']}}
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <h3 style="color:#b38f00; margin-left:20px;"><strong><u>Upcoming Bookings</u></strong></h3>
              <br>
              <br>
              <div class="row gutters-sm">
              @foreach($futurebooking as $futurebooking)
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i><strong><u>Booking No : {{$futurebooking->id}}</u></strong></h6>
                      <small>Booking Date : {{$futurebooking->Date}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Booking Time : {{$futurebooking->Time}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Worker : {{$futurebooking->worker->Fname}} {{$futurebooking->worker->Lname}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Problem Type : {{$futurebooking->category->Category}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Component : {{$futurebooking->subcategory->Subcategory}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Payment : {{$futurebooking->subcategory->Payment}}</small>
                      <div  style="height: 5px">
                              </div>

                              <small> 	<a class="btn btn-danger" href={{"/custdeletebooking/".$futurebooking->id}}> <span>Delete</span></a>	</small>
                      <div  style="height: 5px">
                              </div>

                             
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              <br>
              <br>
              <h3 style="color:#b32d00; margin-left:20px;"><strong><u>Past Bookings</u></strong></h3>
              <br>
              <br>

              <div class="row gutters-sm">
              @foreach($booking as $booking)
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i><strong><u>Booking No : {{$booking->id}}</u></strong></h6>
                      <small>Booking Date : {{$booking->Date}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Booking Time : {{$booking->Time}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Worker : {{$booking->worker->Fname}} {{$booking->worker->Lname}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Problem Type : {{$booking->category->Category}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Component : {{$booking->subcategory->Subcategory}}</small>
                      <div  style="height: 5px">
                              </div>
                      <small>Payment : {{$booking->subcategory->Payment}}</small>
                      <div  style="height: 5px">
                              </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
              
            </div>
          </div>
        </div>
    </div>

    <div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Messages</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					
				
				
				</div>
			</form>
		</div>
	</div>
</div>



       
</body>

</html>