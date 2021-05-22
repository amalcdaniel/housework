@extends("Admintheme")
@section("content")
<section id="worker">
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
    
    <form action="workercatread" method="post">
   

        {{csrf_field()}}
    <table class="table table-borderless ">
    <tr>
        <td>
        <input type="text" class="form-control" placeholder="First Name" name="fname" required>
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
        </td>
    </tr>
    <tr>
    <td>
    <select name="gender" id="gender" class="form-control" >
    <option>Male</option>
    <option>Female</option>
    <option>Transgender</option>
    
    </select>
    </td>
    </tr>
    

    <tr>
        <td>
        <input type="text" class="form-control" placeholder="House/Flat/Apartment no" name="hno" required>
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" class="form-control" placeholder="Street" name="street" required>
        </td>
    </tr>
    <tr>
        <td>
        <input type="text" class="form-control" placeholder="City" name="city" required>
        </td>
    </tr>
    <tr>
        <td>
        <input type="number" class="form-control" placeholder="Pincode" name="pin" required>
        </td>
    </tr>
    <tr>
        <td>
        <input type="email" name="Email" class="form-control" placeholder="Email" value="{{ old('Email') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </td>
    </tr>
    <tr>
    <td><span class="text-danger">@error('Email'){{ $message }} @enderror</span></td>
    </tr>
    <tr>
        <td>
        <input type="tel" class="form-control"placeholder="Mobile No" name="mob"
pattern=".{12}" title="12 digits required" required>
        </td>
    </tr>
    <tr>
    <td><span class="text-danger">@error('mob'){{ $message }} @enderror</span></td>
    </tr>

    <tr>
    <td>
    <select name="wtype" id="wtype" class="form-control" name="wtype">
    <option>Electrician </option>
    <option>Plumber</option>
    </select>
    </td>
    </tr>

    <tr>
    <td>
    <select name="idproof" id="idproof" class="form-control" name="idproof">
    <option>Aadhar Number </option>
    <option>Driving License Number</option>
    <option>PAN Card Number</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <input type="number" class="form-control" placeholder="ID Proof Number" name="idproofno"
pattern=".{16}" title="16 digits required" required>
    </td>
    </tr>

    <tr>
    <td>

    <select name="category" id="category" class="form-control" >

    @foreach($category as $category)
    <option>{{$category->Category }}</option>
    @endforeach 
    </select>
    </td>
    </tr>
    
    <tr>
        <td>
        <input type="password" class="form-control" placeholder="Password" name="pass" required></td>
    </tr>
    <tr>
    <td>
    <a href=""><button class="btn btn-dark" style="width:1550px">Next -></button></a>
    </td>
    </tr>
    </table>
    </form>
    
    
    </div>
    
    </div>
    
        </div>
        </section>
        @endsection