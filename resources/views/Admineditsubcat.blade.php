<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>HousWork</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #fff;
	background-image: url('https://qualitymatters.nice.org.uk/our-offer-to-you/assets/tTRDUvFbH1/our-offer-background-1920x1080.png');
	margin-top:250px;
/* Full height */
	height: 100%;

/* Center and scale the image nicely */
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	
	font-family: 'Roboto', sans-serif;
}
.form-control {
	min-height: 41px;
	box-shadow: none;
	border-color: #e1e4e5;
	font-size: 14px;
}
.form-control, .btn {        
	border-radius: 3px;
}    
.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}	
.signup-form form {
	color: #9ba5a8;
	border-radius: 3px;
	margin-bottom: 5px;
	background: rgba(0,0,0,0.9);
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
	opacity:0.75;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 13px;
}
.signup-form .btn, .signup-form .btn:active {        
	font-size: 16px;
	font-weight: bold;
	background:#fff; !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #3fc0ad !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5fcaba;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}

</style>
</head>
<body>
<div class="signup-form" style="margin-left:100px;" >
<form action="/subcategoryeditprocess/{{ $subcategoryview->id }}" method="post">
                  {{csrf_field()}}
		<h2 style="color:white;" >Change Subcategory<span style="color:white;" >.</span></h2>
		<p>Subcategory id : {{$subcategoryview->id}}</p>
		<hr>
        <div class="form-group">
        <input type="text" class="form-control" name="subcategory"  style="background-color:#595858; color:white;" value="{{$subcategoryview->Subcategory}}" required >
                    
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="payment"  style="background-color:#595858; color:white;" value="{{$subcategoryview->Payment}}" required >
                    
        </div>
        <div class="form-group">
            <button type="submit" style="color:black;"  class="btn btn-primary btn-block btn-lg">Update Subcategory</button>
        </div>
		<div class="form-group">
             </div>
		<p class="small text-center"style="color:white;">By clicking the Update button, change will be reflected in <br><a href="#">Database</a>.</p>
    </form>
    <a href="#Confirmation" class="btn btn-danger" style="color:black;" data-toggle="modal"><span>Cancel</span></a>	







<!-- Delete Modal HTML -->
<div id="Confirmation" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header" style="background-color:white;">						
					<h4 class="modal-title" style="color:black;"><strong>Discard Changes ?</strong></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body" style="background-color:white;">					
					<p style="color:black;"><strong>Are you sure you want to go back?</strong></p>
					<p class="text-warning"><small><strong>The changes will not be saved.</strong></small></p>
				</div>
				<div class="modal-footer" style="background-color:white;">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<a href="/adminviewsubcat#categories"><input class="btn btn-danger" type="button" style="color:black;" value="Confirm"></a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>















 




  

  