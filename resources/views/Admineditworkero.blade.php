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
	 /* The image used */
	 background-image: url('https://images.squarespace-cdn.com/content/v1/5a0ef8678a02c7b6b610c782/1510932251927-LRJFB9POYN2KIASE8QZ8/ke17ZwdGBToddI8pDm48kLDvayCDLCFOXcguE0sRvix7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UX2CA3VMdN7prDtfvDYWVkgEbxWPbz8OzQze1TRIeVzeZCkVnhDMoqWnIzF2cFonXg/smith+plumbing+banner.jpg?format=2500w');

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
	background: black !important;
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
<div class="signup-form"  style="margin-left:100px;">
<form action="/workeroeditprocess/{{ $workerview->id }}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
		<h2 style="color:white;">Change Worker Details<span style="color:white;">.</span></h2>
		<p>Worker id : {{$workerview->id}}</p>
		<hr>
        <div class="form-group">
        <select name="wtype" id="wtype" class="form-control" style="background-color:#595858; color:white;" name="wtype" value="{{ $workerview->Wtype }}">
        <option value="{{$workerview->Wtype}}" selected>Selected</option>
		<option>Electrician </option>
        <option>Plumber</option>
        </select>
        
       </div>
       <div class="form-group">
       <select name="category" id="category" style="background-color:#595858; color:white;" class="form-control" >
		<option value="{{$workerview->category->Category}}" selected> Selected </option>
        @foreach($category as $category)
        <option>{{$category->Category }}</option>
        @endforeach 
        </select>   
       </div>
       <div class="form-group">
       <select name="location" id="location" style="background-color:#595858; color:white;" class="form-control" >
	   <option value="{{$workerview->location->Location}}" selected>Selected  </option>
        @foreach($location as $datas)
        <option>{{$datas->Location }}</option>
        @endforeach 
        </select>   
        
       </div>
       <div class="form-group">
       <input class="form-control" type="file" style="background-color:#595858; color:white;" name="photo" value="{{ $workerview->Filepath}}" required>
       </div>
       <div class="form-group">
       <input name="desc"  class="form-control" style="background-color:#595858; color:white;" value="{{ $workerview->Description }}">
 
       </div>
       <div class="form-group">
       <select name="status" class="form-control" style="background-color:#595858; color:white;" name="status" value="{{ $workerview->Status }}">
        <option>Active</option>
        <option>Offline</option>
        <option>Inactive</option>
        </select>
       </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Update Details</button>
        </div>
		<div class="form-group">
             </div>
		<p class="small text-center" style="color:white;">By clicking the Update button, change will be reflected in <br><a href="#">Database &</a>.</p>
    </form>
    <a href="#Confirmation" class="btn btn-danger"  style="color:white;" data-toggle="modal"><span>Cancel</span></a>	







<!-- Delete Modal HTML -->
<div id="Confirmation" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header" style="background-color:white;">						
					<h4 class="modal-title"style="color:black;"><strong>Discard Changes ?</strong></h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body"  style="background-color:white;">					
					<p style="color:black;"><strong>Are you sure you want to go back?</strong></p>
					<p class="text-warning"><small><strong>The changes will not be saved.</strong></small></p>
				</div>
				<div class="modal-footer"  style="background-color:white;">
					<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
					<a href="/adminviewworkero#worker"><input class="btn btn-danger" value="Confirm"></a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>















 




  

  