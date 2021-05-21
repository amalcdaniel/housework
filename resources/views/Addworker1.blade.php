<!-- @extends("admintheme")
@section("content")
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xxl-12">
    <form action="workercatread1" method="post">
    {{csrf_field()}}
    <table class="table table-borderless ">
    <input type="hidden" class="form-control" name="id" value="{{$workerno}}">

    <tr>
    <td>
    <select name="subcategory" id="subcategory" class="form-control" >

    @foreach($data as $data)
    <option>{{$data->Subcategory }}</option>
    @endforeach 
    </select>
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
        @endsection -->