<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LoginModel;

use App\Models\LocationModel;

use App\Models\WorkerModel;

use App\Models\SubcategoryModel;

use App\Models\CategoryModel;

use App\Models\SignupModel;

use App\Models\BookingModel;

use App\Models\FeedbackModel;

use Carbon\Carbon;

use Redirect;

use Session;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminview()
    {
        $workerview=WorkerModel::all();

        return view('Adminviewworkerp',compact('workerview'));
        

    }

    public function feedbackview()
    {
        $worker = WorkerModel::where('Email','=', session('LoggedUser'))->first();
        $feedback=FeedbackModel::where('Workername','=',$worker->Email)->get();
        return view('Workermessages',compact('worker','feedback'));
    }

    public function customerview()
    {

        $workerview = WorkerModel::with('location','category')->get();
        return view('Custviewworkers',compact('workerview'));
    
    }

    

    public function adminview1()
    {
        $worker=WorkerModel::all();

        return view('Adminviewworkero',compact('worker'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Addworker');
    }

    public function workerhomecreate()
    {
        return view ('Workerhome');
    }

    public function statuscreate()
    {
        return view ('Workertheme');
    }

    public function screate()
    {
        return view ('Addworker1');
    }

    public function lcreate()
    {
        return view ('Addworker2');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([        
            'Email'=>'required|Email|unique:worker_models',
            
    ]);
    
    $getfname=request("fname");
    $getlname=request("lname");
    $gethno=request("hno");
    $getstreet=request("street");
    $getcity=request("city");
    $getpin=request("pin");
    $getemail=request("Email");
    $getmob=request("mob");
    $getpass=request("pass");
    $getgender=request("gender");
    $getwtype=request("wtype");
    $getcategory=request("category");
    $getidproof=request("idproof");
    $getidproofno=request("idproofno");
    $userInfo = CategoryModel::where('Category','=', $getcategory)->first();
    $usercount=LoginModel::where('Username','=',$getemail)->count();
    
    if($usercount==0)
    {
    $worker=new WorkerModel();
    $worker->Fname=$getfname;
    $worker->Lname=$getlname;
    $worker->Hno=$gethno;
    $worker->Gender=$getgender;
    $worker->Street=$getstreet;
    $worker->City=$getcity;
    $worker->Pincode=$getpin;
    $worker->Email=$getemail;
    $worker->Mob=$getmob;
    $worker->Idproof=$getidproof;
    $worker->Idproofno=$getidproofno;
    $worker->Wtype=$getwtype;
    $worker->Categoryid=$userInfo->id;
    $worker->Description="null";
    $worker->Locationid="1";
    $worker->Filepath="null";
    $worker->save();
    

 
    
    $login=new LoginModel();
        $login->Username=$getemail;
        $login->Password=$getpass;
        $login->Usertype="Worker";
        $save= $login->save();

    }
    else{
         return redirect("/addworker#worker")->with('fail','Email already taken');
     }
        $workerno1=$getemail;
        $data=LocationModel::all();
        return view('Addworker2',compact('data','workerno1'));

    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workerview=WorkerModel::find($id);

        return view('Admineditworkerp',compact('workerview'));
    }

    public function wedit($id)
    {
        $workerview=WorkerModel::find($id);
        $category=CategoryModel::all();
        $location=LocationModel::all();
        $subcategory=SubcategoryModel::all();

        return view('Admineditworkero',compact('workerview','category','location','subcategory'));
    }

    public function delete($id)
    {
        try{
        $data=WorkerModel::find($id);
        $data->delete();
        return redirect('/adminviewworkero#worker');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $worker=WorkerModel::find($id); 

    
    $getfname=request("fname");
    $getlname=request("lname");
    $gethno=request("hno");
    $getstreet=request("street");
    $getcity=request("city");
    $getpin=request("pin");
    $getemail=request("email");
    $getmob=request("mob");
    $getgender=request("gender");
    $getidproof=request("idproof");
    $getidproofno=request("idproofno");

    $worker->Fname=$getfname;
    $worker->Lname=$getlname;
    $worker->Hno=$gethno;
    $worker->Gender=$getgender;
    $worker->Street=$getstreet;
    $worker->City=$getcity;
    $worker->Pincode=$getpin;
    $worker->Email=$getemail;
    $worker->Mob=$getmob;
    $worker->Idproof=$getidproof;
    $worker->Idproofno=$getidproofno;
    $worker->save();

    return redirect('/adminviewworkerp#worker');
    }

    public function wupdate(Request $request, $id)
    {
    $worker=WorkerModel::find($id); 
    $getwtype=request("wtype");
    $getdesc=request("desc");
    $getcategory=request("category");
    $getstatus=request("status");
    $userInfoc = CategoryModel::where('Category','=', $getcategory)->first();
      $getlocation=request("location");
    $userinfol = LocationModel::where('Location','=', $getlocation)->first();
    $getphoto=$request->file("photo");
    $name=$getphoto->getClientOriginalName();
    $getphoto->move(public_path('assets/worker_img'),$name);
    
    $worker->Wtype=$getwtype;
    $worker->Categoryid=$userInfoc->id;
    $worker->Locationid=$userinfol->id;
    $worker->Filepath=$name;
    $worker->Description=$getdesc;
    $worker->Status=$getstatus;
    $worker->save();

    return redirect('/adminviewworkero#worker');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sstore(Request $request)
    {
        $getemail=$request->id; 
        $getsubcategory=request("subcategory");
        $userinfo = SubcategoryModel::where('Subcategory','=', $getsubcategory)->first();
        $worker=new WorkerModel();
        $worker=WorkerModel::where('Email',$request->id)->update(['Description'=>$request->desc,'Subcategoryid'=>$userinfo->id]); 
        $workerno1=$getemail; 
        $data=LocationModel::all();
        return view('Addworker2',compact('data','workerno1'));

    }

    public function statusupdate(Request $request)
    {
        $getstatus=request('status'); 
        $data = WorkerModel::where('Email','=', session('LoggedUser'))->first();
        $worker=WorkerModel::where('Email',$data->Email)->update(['Status'=>$getstatus]); 
    
        return redirect('/workerdashboard');

    }

    public function lstore(Request $request)
    {
        $getemail=$request->id; 
        $getlocation=request("location");
        $getphoto=$request->file("photo");
        $name=$getphoto->getClientOriginalName();
        $getphoto->move(public_path('assets/worker_img'),$name);
        $userinfo = LocationModel::where('Location','=', $getlocation)->first();
        $worker=new WorkerModel();
        $worker=WorkerModel::where('Email',$request->id)->update(['Description'=>$request->desc,'Filepath'=>$name,'Locationid'=>$userinfo->id]); 
        return redirect('/adminhome');

    }

    public function viewbookings()
    {
        
        $data = WorkerModel::where('Email','=', session('LoggedUser'))->first();
       
        $bookingcount=BookingModel::where('Workerid','=',$data->id)->count();

        if($bookingcount==0)
        {
            return view('NotFound');
        }
        $cdate = Carbon::now();
        $pdate=$cdate->toDateString();
        $booking = BookingModel::where('Workerid','=', $data['id'])->where('Date','<=',$cdate)->where('Status','=','Success')->with('customer')->get();
        $activebooking = BookingModel::where('Workerid','=', $data['id'])->where('Date','=',$pdate)->where('Status','=','Success')->with('customer')->get();
        $futurebooking = BookingModel::where('Workerid','=', $data['id'])->where('Date','>',$cdate)->where('Status','=','Success')->with('customer')->get();
        return view('Workerviewbook',compact('booking','data','activebooking','futurebooking'));

    }

    public function getworkersearch()
    {

        $location=LocationModel::all();
        return view ('Workersearch',compact('location'));
    }



    public function workersearch(Request $request)
    {
        
        $getloc=request('location');
        $locationid=LocationModel::where('Location','=',$getloc)->first();
            $workerview=WorkerModel::query()
        ->where('Locationid', 'LIKE' , "%{$locationid->id}%")
        ->get();

        
        return view('Custviewworkers',compact('workerview'));
       
          
    }



}
    