<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css"
    />
    <style>



    </style>

</head>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" style=" background-image:url('https://wallpapercave.com/wp/wp4825790.jpg');   " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HousWork <sup>Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           

          

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Add Pages:</h6>
                        <a class="collapse-item" href="/categoryaddworker#worker">Add Worker</a>
                        <a class="collapse-item" href="/adminhome#category">Add Category</a>
                        <a class="collapse-item" href="/adminhome#location">Add Location</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">View Pages:</h6>
                        <a class="collapse-item" href="\adminviewbookings#booking">View Bookings</a>
                        <a class="collapse-item" href="\messages#customer">View Messages</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="\adminhome">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Home</span></a>
            </li>

            <!-- Nav Item - Tables -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
            <h5>HousWork <span></span></h5>
    
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-0 static-top shadow" style=" background-image:url('https://wallpapercave.com/wp/vhgYQou.jpg');   ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                       <!-- Nav Item - User Information -->
                      

                    </ul>

                </nav>
                   

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style=" background-image:url('https://wallpapercave.com/wp/vhgYQou.jpg');   ">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button class="btn btn-primary">Generate Reports</button>
                
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                              Download
                                 
                                </a>
                            </div>
                        </li>
                   
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row" >

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-10">
                                <div class="card-body"  style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Users</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customercount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-11">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total Workers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$workercount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-10">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Bookings
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$bookingcount}}</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-10">
                                <div class="card-body" style="background: rgba(0,0,0,0.9);">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total Reviews</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$reviewcount}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <br>
                    <br> <br> <br> 
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-9"  style="width:1100px;">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between" style="background-color:#006680;">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                           <h5><b>  Booking Report</b></h5></div>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                           
                                        </a>
                                       
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body"  style="background: rgba(0,0,0,0.9);">
                                   


                                    <form action="report" method="post" > 
                                    
                                     {{csrf_field()}}

                                    <input type="text" value="Bookings" class="form-control" disabled>
                                <br>
                                                   
                             <h5 class="form-control"  >Type :
                             <input id="a" type="radio" name="type" value="Daily">Daily 
                             <input id="b" type="radio" name="type" value="Monthly">Monthly
                             <input id="c" type="radio" name="type" value="Yearly">Yearly
                             <input id="d" type="radio" name="type" value="Range">Between Two Dates</h5>

                             
                                
                                <div class="customer" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="date" name="date" class="form-control" placeholder="Date" />
                                    </div>
                                    </div>

                                    <div class="year" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="number" name="year" class="form-control" placeholder="Year" />
                                    </div>
                                    </div>

                                    <div class="range" >
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="date" name="date1" class="form-control" placeholder="Start date" />
                                        <br>
                                        <input type="date" name="date2" class="form-control" placeholder="End date" />
                                
                                    </div>
                                    </div>

                                    <div class="month" >
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                          <select class="form-control" name="month"  >
                                          <option value="01">January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                   
                                </select>
                                </div>
                                    </div>
                        
                              <br>
                                <button  class="btn btn-primary">View</button>
                                    </form>
                                    <br>
                                    <br>
                                    
                                    <section id="booking">
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>View <b>Bookings</b></h2>
					</div>
					<div class="col-sm-6">
							
					</div>
				</div>
			</div>
			<table id="example" class="table table-striped table-hover">
				<thead>
					<tr>
						
						<th>Booking ID</th>
                        <th>Customer Name</th>
                        <th>Worker Name</th>
                        <th>Category Name</th>
                        <th>Subcategory Name</th>
                        <th>Location</th>
                        <th>Payment</th>
                        <th>Date</th>
                        <th>Time</th>
					</tr>
				</thead>
				<tbody>
					      
                @foreach($booking as $booking)
                    <tr>
                   
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->customer->Fname}} {{$booking->customer->Lname}}</td>
                        <td>{{$booking->worker->Fname}} {{$booking->worker->Lname}}</td>
                        <td>{{$booking->category->Category}}</td>
                        <td>{{$booking->subcategory->Subcategory}}</td>
                        <td>{{$booking->location->Location}}</td>
                        <td>{{$booking->subcategory->Payment}}</td>
                        <td>{{$booking->Date}}</td>
                        <td>{{$booking->Time}}</td>
						<td>
					    </td>
                        </tr>
                        @endforeach
				</tbody>
			</table>
			
		</div>
	</div>        
</div>

</section>



                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose the format</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                <button class="btn btn-primary" style="margin-left:150px;" id="pdf">Download in PDF</button>
                <br>
                <br>
                <button class="btn btn-primary" style="margin-left:150px;" id="json">Download in JSON</button>
                <br>
                <br>
                <button class="btn btn-primary" style="margin-left:150px;" id="csv">Download in CSV</button>
                </div>
                <div class="modal-footer">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
        $(document).ready(function(){
 
 $(".customer").toggle();
 
 $(".month").toggle();

 $(".range").toggle();

 $(".year").toggle();


});

$(document).ready(function(){
$("#a").click(function(){
 $(".customer").show();
 $(".month").hide();
 $(".year").hide();
 $(".range").hide();
});
});

$(document).ready(function(){
$("#b").click(function(){
  $(".month").show();
  $(".customer").hide();
  $(".year").hide();
  $(".range").hide();
});
});

$(document).ready(function(){
$("#c").click(function(){
 $(".customer").hide();
 $(".year").show();
 $(".month").hide();
 $(".range").hide();
});
});

$(document).ready(function(){
$("#d").click(function(){
 $(".customer").hide();
 $(".year").hide();
 $(".month").hide();
 $(".range").show();
});
});


</script>
<script type="text/javascript" src="src/jquery-3.3.1.slim.min.js"></script>

<script type="text/javascript" src="src/jspdf.min.js"></script>

<script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="src/tableHTMLExport.js"></script>

<script type="text/javascript">
  
  $("#json").on("click",function(){
    $("#example").tableHTMLExport({
      type:'json',
      filename:'sample.json'
    });
  });

  $("#pdf").on("click",function(){
    $("#example").tableHTMLExport({
      type:'pdf',
      filename:'sample.pdf'
    });
  });

  $("#csv").on("click",function(){
    $("#example").tableHTMLExport({
      type:'csv',
      filename:'sample.csv'
    });
  });

</script>

</body>

</html>