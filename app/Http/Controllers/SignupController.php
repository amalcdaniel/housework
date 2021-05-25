<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\LoginModel;

use App\Models\SignupModel;

use App\Models\WorkerModel;

use App\Models\FeedbackModel;

use App\Models\LocationModel;

use App\Models\CategoryModel;

use App\Models\BookingModel;

use App\Models\SubcategoryModel;

use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    public function bookcreate()
    {
        return view('Custbooking');
    }

    public function fcreate()
    {
        return view('feedback');
    }

    public function bookusersession()
    {
    $data = SignupModel::where('Email','=', session('LoggedUser'))->first();
    return view('Custbooking',compact('data'));
    }

    public function fstore()
    {
        $getid=request("cid");
        $getfeedback=request("feedback");
        $getname=request("name");
        
        $feedback = new FeedbackModel();
        $feedback->Customerid=$getid;
        $feedback->Feedback=$getfeedback;
        $feedback->Workername=$getname;
        $feedback->save();
        $data = ['LoggedUserInfo'=>SignupModel::where('Email','=', session('LoggedUser'))->first()];
        return view ('Customerhome',$data);
  

    }

    public function bookstore()
    {
        $getcategory=request("category");
        $getlocation=request("location");
        $getcid=request("cid");
        $userInfo = CategoryModel::where('Category','=', $getcategory)->first();
        $userinfo = LocationModel::where('Location','=', $getlocation)->first();
        $booking = new BookingModel();
        $booking->Customerid=$getcid;
        $booking->Categoryid=$userInfo->id;
        $booking->Locationid=$userinfo->id;
        $booking->Subcategoryid=2;
        $booking->Workerid=1;
        $booking->Date="null";
        $booking->Time="null";
        $booking->Status="null";
        $booking->save();
        $worker=WorkerModel::where('Categoryid','=',$userInfo->id)->where('Locationid','=',$userinfo->id)->where('Status','=','Active')->get();
        $subcategory = SubCategoryModel::where('Categoryid','=',$userInfo->id)->get();
        $lastinsertedid=$booking->id;
        $pdate = Carbon::now();
        $cdate=$pdate->toDateString();
         return view ('Custbooking1',compact('worker','subcategory','lastinsertedid','cdate'));

    }

    public function bookstore1(Request $request)
    {
        $request->validate([        
            'date'=>'required'
    ]);
        $getid=request("ida");
        $getworker=request("worker");
        $getsubcategory=request("subcategory");
        $getdate=request("date");
        $gettime=request("time");
        $userinfo = SubcategoryModel::where('Subcategory','=', $getsubcategory)->first();
        $workerinfo = WorkerModel::where('Email','=', $getworker)->first();
        $workercount=BookingModel::where('Workerid','=',$workerinfo->id)->where('Date','=',$getdate)->where('Time','=',$gettime)->count();
        if($workercount>0)
        {   
            BookinModel::where('id','=',$getid)->delete();
            return redirect("/custbook")->with('fail','Booking slot is already occupied. Please choose another slot');
        }
       
        $booking=BookingModel::where('id','=',$getid)->update(['Date'=>$request->date,'Workerid'=>$workerinfo->id,'Time'=>$request->time,'Subcategoryid'=>$userinfo->id]); 
        $payment=$userinfo->Payment;
        return view('Custbooking2',compact('payment','getid'));
        

    }

    public function bookstore2(Request $request)
    {
        try{
        $getid=request("ida");
        
        $status="Success";
        $booking=BookingModel::where('id','=',$getid)->update(['Status'=>$status]); 
        $booking1=BookingModel::select('Workerid')->where('id','=',$getid)->first();
        $worker=WorkerModel::where('id','=',$booking1->Workerid)->first();
        
    
        Nexmo::message()->send([
            'to' => $worker->Mob,
            'from' => '16105552344',
            'text' => 'A new booking found.Please login to your account now. - HouseWork'
        ]);

        Session::flash('success', 'Message sent');
        return view('Custbooking3',compact('booking'));
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('ok');window.location='/home';</script>"; 
    }
    }

    public function sms()
    {
        // return $request;
        dd($booking);
        
        
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
                'Email'=>'required|Email|unique:signup_models'
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

        $usercount=LoginModel::where('Username','=',$getemail)->count();

        if($usercount==0)
        {
        $signup = new SignupModel();
        $signup->Fname=$getfname;
        $signup->Lname=$getlname;
        $signup->Hno=$gethno;
        $signup->Street=$getstreet;
        $signup->City=$getcity;
        $signup->Pincode=$getpin;
        $signup->Email=$getemail;
        $signup->Mob=$getmob;
        $signup->save();
        
        $login=new LoginModel();
        $login->Username=$getemail;
        $login->Password=$getpass;
        $login->Usertype="Customer";
        $save= $login->save();
        }
        else
        {
            echo "<script>alert('Email already taken');window.location='/#team';</script>"; 
        }
        if($save){
            return redirect("/#team")->with('success','New User has been successfully registered');
         }else{
             return redirect("/#team")->with('fail','Something went wrong, try again later');
         }

        return view('\index#about');

    }


    public function adminstore(Request $request)
    {
       

        $getemail=request("email");
        $getpass=request("pass");

       
        $login=new LoginModel();
        $login->Username=$getemail;
        $login->Password=$getpass;
        $login->Usertype="Admin";
        $save= $login->save();
        
        if($save){
            return redirect("/#team")->with('success','New User has been successfully registered');
         }else{
             return redirect("/#team")->with('fail','Something went wrong, try again later');
         }

        return redirect('/#about');

    }


    public function feedbackworkerview()
    {
        $workerview=WorkerModel::all();
        $data = SignupModel::where('Email','=', session('LoggedUser'))->first();
        

        return view('Feedback',compact('workerview','data'));
        

    }

    public function adminviewfeedback()
    {
        $feedbackcount=FeedbackModel::count();
        if($feedbackcount==0)
        {
            return view('NotFound');
        }
        $feedback=FeedbackModel::all();
        return view('Adminviewfeedback',compact('feedback'));
        

    }

    public function mybookings()
    {
        
        $data = SignupModel::where('Email','=', session('LoggedUser'))->first();
        $cdate = Carbon::now();
        $pdate=$cdate->toDateString();
        $booking = BookingModel::where('Customerid','=',$data['id'])->where('Date','<=',$cdate)->where('Status','=','Success')->get();
        $activebooking = BookingModel::where('Customerid','=',$data['id'])->where('Date','=',$pdate)->where('Status','=','Success')->get();
        $futurebooking = BookingModel::where('Customerid','=',$data['id'])->where('Date','>',$cdate)->where('Status','=','Success')->get();
        return view('Custviewbookings',compact('booking','data','activebooking','futurebooking'));

    }

    public function viewcat()
    {
        $category=CategoryModel::all();
        $location=LocationModel::all();
        $data = SignupModel::where('Email','=', session('LoggedUser'))->first();
        return view('Custbooking',compact('category','location','data'));
        

    }
    public function bookreportview()
    {
        $booking=BookingModel::all();
        $workercount=WorkerModel::count();
        $customercount=SignupModel::count();
        $bookingcount=BookingModel::count();
        $reviewcount=FeedbackModel::count();
        return view('Adminbookreport',compact('booking','workercount','customercount','bookingcount','reviewcount'));
        

    }

    public function vieworker()
    {

        $worker=WorkerModel::find($id);
        return view('Custbooking',compact('worker'));
        

    }

    public function bookreportcreate()
    {

        return view('Adminbookreport');
        

    }

    public function bookreportupdate(Request $request)
    {
      $gettype=request('type');
      $workercount=WorkerModel::count();
      $customercount=SignupModel::count();
      $bookingcount=BookingModel::count();
      $reviewcount=FeedbackModel::count();
      
      if($request->type=="Daily")
      {
          $getdate=request('date');
        
          $booking=BookingModel::select('*')
          ->where('Date','=',$getdate)
          ->get();
          return view('Adminbookreport',compact('booking','workercount','customercount','bookingcount','reviewcount'));
      }

      if($request->type=="Monthly")
      {
          $getmonth=request('month');
            
          $booking=BookingModel::select('*')
          ->whereMonth('Date',$getmonth)
          ->first();
          return view('Adminbookreport',compact('booking','workercount','customercount','bookingcount','reviewcount'));
      }

      
      if($request->type=="Yearly")
      {
          $getyear=request('year');
            
          $booking=BookingModel::select('*')
          ->whereYear('Date',$getyear)
          ->get();
          return view('Adminbookreport',compact('booking','workercount','customercount','bookingcount','reviewcount'));
      }

      if($request->type=="Range")
      {
          $getdate1=request('date1');
          $getdate2=request('date2');
            
          $booking=BookingModel::select('*')
          ->whereBetween('Date', [$getdate1, $getdate2])->get();
          
          return view('Adminbookreport',compact('booking','workercount','customercount','bookingcount','reviewcount'));
      }

      
      
      
      return view('Adminbookreport');
    }


   

    public function deletefeedback($id)
    {
        try{
        $data=FeedbackModel::find($id);
        $data->delete();
        return redirect('/viewfeedback#feedback');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }

    public function deletebooking($id)
    {
        try{
        $data=BookingModel::find($id);
        $data->delete();
        return redirect('/adminhome');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }
    
    public function custdeletebooking($id)
    {
        try{
        $data=BookingModel::find($id);
        $data->delete();
        return redirect('/home');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot perform requested action now.Try again after sometime.');window.location='/home';</script>"; 
    }
    }
    

    public function adminview()
    {
        $customercount=SignupModel::count();
        if($customercount==0)
        {
            return view('NotFound');
        }
        $customerview=SignupModel::all();

        return view('Adminviewcustomer',compact('customerview'));
        

    }

    public function adminbookview()
    {
        $bookingcount=BookingModel::count();
        if($bookingcount==0)
        {
            return view('NotFound');
        }
        $booking=BookingModel::all();

        return view('Adminviewbookings',compact('booking'));
        

    }


    function check(Request $request){
        //Validate requests
        
        $userInfo = LoginModel::where('Username','=', $request->uname)->first();

        

        if(!$userInfo){
            return redirect("/#about")->with('fail','We do not recognize your email address');
           
        }else{
            //check password
            if($request->pass== $userInfo->Password){
                $request->session()->put('LoggedUser', $userInfo->Username);

                if($userInfo->Usertype=="Customer")
                {
                    return redirect('/home');
                }
                if($userInfo->Usertype=="Admin")
                {
                    return redirect('/adminhome');
                }
                if($userInfo->Usertype=="Worker")
                {
                    
                    $data = WorkerModel::where('Email','=', session('LoggedUser'))->first();

                    return redirect('/workerdashboard');
                }

            }else{
                return redirect("/#about")->with('fail','Incorrect password');
            }
        }
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
        $customerview=SignupModel::find($id);

        return view('Custeditprofile',compact('customerview'));
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
        $signup=SignupModel::find($id); 
        $getfname=request("fname");
        $getlname=request("lname");
        $gethno=request("hno");
        $getstreet=request("street");
        $getcity=request("city");
        $getpin=request("pin");
        $getmob=request("mob");
        $getpass=request("pass");

        $signup->Fname=$getfname;
        $signup->Lname=$getlname;
        $signup->Hno=$gethno;
        $signup->Street=$getstreet;
        $signup->City=$getcity;
        $signup->Pincode=$getpin;
        $signup->Mob=$getmob;
        $signup->save();

        return redirect('/home#team');
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

    public function dashboard()
    {
        $data = ['LoggedUserInfo'=>SignupModel::where('Email','=', session('LoggedUser'))->first()];
        return view ('Customerhome',$data);
    }

    public function workerdashboard()
    {
        $data = WorkerModel::where('Email','=', session('LoggedUser'))->first();
        return view ('Workerhome',compact('data'));
    }

    public function custchangepassword()
    {
        $getoldpass=request('oldpass');
        $getnewpass=request('newpass');
        $confirmpass=request('cnewpass');
        $data = LoginModel::where('Username','=', session('LoggedUser'))->first();
        $getemail=$data->Username;
        if($getoldpass==$data->Password)
        {
            if($getnewpass==$confirmpass)
            {
                $change=LoginModel::where('Username','=',$getemail)->update(['Password'=>$getnewpass]); 
                return redirect('/home');
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='/home';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Inputed Old Password is not recognized');window.location='/home';</script>"; 

    
        }

    }

    public function workerchangepassword()
    {
        $getoldpass=request('oldpass');
        $getnewpass=request('newpass');
        $confirmpass=request('cnewpass');
        $data = LoginModel::where('Username','=', session('LoggedUser'))->first();
        $getemail=$data->Username;
        if($getoldpass==$data->Password)
        {
            if($getnewpass==$confirmpass)
            {
                $change=LoginModel::where('Username','=',$getemail)->update(['Password'=>$getnewpass]); 
                
                return redirect('/#about');
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='/workerdashboard';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Inputed Old Password is not recognized');window.location='/workerdashboard';</script>"; 

    
        }

    }


    public function adminchangepassword()
    {
        $getoldpass=request('oldpass');
        $getnewpass=request('newpass');
        $confirmpass=request('cnewpass');
        $data = LoginModel::where('Username','=','admin@gmail.com')->first();
        $getemail=$data->Username;
        if($getoldpass==$data->Password)
        {
            if($getnewpass==$confirmpass)
            {
                $change=LoginModel::where('Username','=',$getemail)->update(['Password'=>$getnewpass]); 
                return redirect('/adminhome');
      
            }
            else{

                echo "<script>alert('New Password and Confirm Password must be same');window.location='/adminhome';</script>"; 

            }

        }
        else
        {
            echo "<script>alert('Inputed Old Password is not recognized');window.location='/adminhome';</script>"; 

    
        }

    }

   

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/');
        }
    }

 


   public function login()
    {
            return view('index');
    }
   public function register()
    {
        return view('index');
    }
}
