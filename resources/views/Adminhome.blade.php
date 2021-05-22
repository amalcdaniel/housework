@extends("Admintheme")
@section("content")


<section id="location" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">

        <div class="row">
        <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
       
        <form action="locationread" method="post">
                  {{csrf_field()}}
                    <table class="table table-borderless " >
   
                     <tr>
                    <td><h5 style="color:white;" class="nav-link scrollto" >Location :</h5>
                     <input type="text" class="form-control" name="location" style="background-color:#595858; color:white;" required >
                     </td>
                     </tr>
                     <tr>
                     <td><span class="text-danger">@error('email'){{ $message }} @enderror</span></td></tr>
                         <tr>
                         <td>
                            <button class="btn btn-dark" style="width:550px">Add location</button>
                         </td>
                         </tr>
                         </table>
                     </form>

  </div>
  <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      
        
          <h1 style="color:white;" class="nav-link scrollto"><img src="assets/img/logo.png" style="width:100px;height:100px;"><strong>HousWork</strong></h1>
          <h2 style="color:white;" class="nav-link scrollto">Add Location<span>.</span></h2>
        </div>
      
     </div>     
          
            </div>
        </div>

      </div>
    </section><!-- End Cta Section -->


    <section id="category" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">

        <div class="row">
        <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
       
        <form action="categoryread" method="post">
                  {{csrf_field()}}
                    <table class="table table-borderless " >
   
                     <tr>
                    <td><h5 style="color:white;" class="nav-link scrollto" >Category :</h5>
                     <input type="text" class="form-control" name="category" style="background-color:#595858; color:white;" required >
                     </td>
                     </tr>
    
                         <tr>
                         <td>
                            <button class="btn btn-dark" style="width:550px" ><a href="/adminhome">Add Category</a></button>
                         </td>
                         </tr>
                         </table>
                     </form>
                  

  </div>
  <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      
        
          <h1 style="color:white;" class="nav-link scrollto"><img src="assets/img/logo.png" style="width:100px;height:100px;"><strong>HousWork</strong></h1>
          <h2 style="color:white;" class="nav-link scrollto">Add Category<span>.</span></h2>
        </div>
      
     </div>     
          
            </div>
        </div>

      </div>
    </section><!-- End Cta Section -->



   
    <section id="subcategory" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">

        <div class="row">
        <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
       
        <form action="subcategoryread" method="post">
        {{csrf_field()}}
                    <table class="table table-borderless " >
   
                     <tr>
                    <td><h5 style="color:white;" class="nav-link scrollto" >Category :</h5>
                    <select name="scategory" class="form-control" style="background-color:#595858; color:white;" required>
                     @foreach($category as $category)
                     <option>{{$category->Category }}</option>
                   @endforeach 
                       
                          </select>
                     </td>
                     </tr>

                     <tr>
                    <td><h5 style="color:white;" class="nav-link scrollto" >Sub Category :</h5>
                     <input type="text" class="form-control" style="background-color:#595858; color:white;" name="subcategory" required >
                     </td>
                     </tr>

                     <tr>
                    <td><h5 style="color:white;" class="nav-link scrollto" >Payment :</h5>
                     <input type="number" class="form-control" style="background-color:#595858; color:white;" name="payment" required >
                     </td>
                     </tr>
    
                         <tr>
                         <td>
                            <button class="btn btn-dark" style="width:550px">Add Sub Category</button>
                         </td>
                         </tr>
                         </table>
                     </form>
        
                  

  </div>
  <div class="col col-12 col-md-6 col-lg-6 col-xl-6 col-s-6">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
      
        
          <h1 style="color:white;" class="nav-link scrollto"><img src="assets/img/logo.png" style="width:100px;height:100px;"><strong>HousWork</strong></h1>
          <h2 style="color:white;" class="nav-link scrollto">Add Sub Category<span>.</span></h2>
        </div>
      
     </div>     
          
            </div>
        </div>

      </div>
    </section><!-- End Cta Section -->






@endsection