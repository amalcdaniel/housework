@extends("Admintheme")
@section("content")
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
    <form action="/admin/addworker" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <table class="table table-borderless " style="height:300px;">
    <input type="hidden" class="form-control" name="id" value="{{$workerno1}}">

    <tr>
    <td>
     Location :
    
    <select name="location" id="location" class="form-control" >

    @foreach($data as $data)
    <option>{{$data->Location }}</option>
    @endforeach 
    </select>
    </td>
    </tr>
    <tr>
        <td>
        <textarea name="desc" id="desc" cols="190" rows="10" class="form-control" placeholder="Enter description here"></textarea>
    </td>
    </tr>
    <tr>
    <td>
        Choose Item Image :
                         <input class="form-control" type="file" name="photo">
         </td>
    </tr>
    <tr>
    <td>
    <button class="btn btn-dark" style="width:1250px">Next -></button>
    </td>
    </tr>
    </table>
    </form>
    
    
    </div>
    
    </div>
    
        </div>
        @endsection