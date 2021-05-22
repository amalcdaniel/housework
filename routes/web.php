<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignupController;

use App\Http\Controllers\LocationController;

use App\Http\Controllers\CategoryController;

use App\Http\Controllers\MessageController;

use App\Http\Controllers\SubcategoryController;

use App\Http\Controllers\WorkerController;

use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
});

Route::get('/pservice', function () {
    return view('PService');
});

Route::get('/eservice', function () {
    return view('EService');
});

Route::get('/cpservice', function () {
    return view('CPservice');
});

Route::get('/ceservice', function () {
    return view('CEservice');
});

Route::get('/cpinstallation', function () {
    return view('CPinstallation');
});

Route::get('/cpblockandleakages', function () {
    return view('CPblockandleakages');
});

Route::get('/cpplumbservices', function () {
    return view('CPplumbservices');
});

Route::get('/pinstallation', function () {
    return view('Pinstallation');
});

Route::get('/pblockandleakages', function () {
    return view('Pblockandleakages');
});

Route::get('/pplumbservices', function () {
    return view('Pplumbservices');
});

Route::get('/addworker', function () {
    return view('Addworker');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/efansandlights', function () {
    return view('Efansandlights');
});

Route::get('/eswitches', function () {
    return view('Eswitches');
});

Route::get('/cefansandlights', function () {
    return view('CEfansandlights');
});

Route::get('/ceswitches', function () {
    return view('CEswitches');
});

Route::get('/celectricalservice', function () {
    return view('CEelectricalservice');
});



Route::get('/adminhome', function () {
    return view('Adminhome');
});

Route::get('/admintheme', function () {
    return view('Admintheme');
});

Route::get('/addsubcategory', function () {
    return view('Addsubcategory');
});

Route::get('/electricalservice', function () {
    return view('Eelectricalservice');
});

Route::get('/addworker', function () {
    return view('Addworker');
});

Route::get('/adminviewloc', function () {
    return view('Adminviewloc');
});

Route::get('/admineditloc', function () {
    return view('Admineditloc');
});

Route::get('/adminviewcat', function () {
    return view('Adminviewcat');
});

Route::get('/register', function () {
    return view('welcome');
});





Route::get('home/customerprofile', function () {
    return view('CustomerProfile');
});


Route::get('/subcategoryaddworker', function () {
    return view('Addworker1');
});

Route::get('/categoryaddworker', function () {
    return view('Addworker');
});

Route::get('/book1', function () {
    return view('Custbooking');
});

Route::get('/book2', function () {
    return view('Custbooking1');
});

Route::get('/book3', function () {
    return view('Custbooking2');
});

;



Route::get('/logout',[SignupController::class, 'logout']);

Route::post('/check',[SignupController::class,'check']);

Route::post('/signup',[SignupController::class,'store']);

Route::post('/adminregister',[SignupController::class,'adminstore']);

Route::group(['middleware' => 'PreventBackHistory'],function(){

Route::get('/adminhome',[LocationController :: class,'create']);

Route::post('/locationread',[LocationController::class,'store']);

Route::get('/adminhome',[CategoryController :: class,'create']);

Route::post('/categoryread',[CategoryController::class,'store']);

Route::get('/',[MessageController :: class,'create']);

Route::post('/messageread',[MessageController::class,'store']);

Route::get('/locationaddworker',[LocationController :: class,'index']);

Route::get('/categoryaddworker',[CategoryController :: class,'getAllCategory']);

Route::get('/adminhome',[CategoryController :: class,'index']);

Route::get('/addsubcategory',[SubcategoryController :: class,'create']);

Route::post('/subcategoryread',[SubcategoryController :: class,'store']);

Route::get('/subcategoryaddworker',[WorkerController :: class,'subcategoryindex']);

Route::get('/adminviewloc',[LocationController :: class,'adminview']);


Route::post('/locationeditprocess/{id}',[LocationController :: class,'update']);

Route::get('/adminviewcat',[CategoryController :: class,'adminview']);

Route::get('/adminviewcustomer',[SignupController::class,'adminview']);

Route::get('/customerhome',[SignupController::class,'customerhome']);

Route::get('/adminviewworkerp',[WorkerController::class,'adminview']);

Route::get('/adminviewworkero',[WorkerController::class,'adminview1']);

Route::get('/adminviewsubcat',[SubcategoryController::class,'adminview']);

Route::get('/customerfeedback',[SignupController::class,'feedbackworkerview']);

Route::get('/viewfeedback',[SignupController::class,'adminviewfeedback']);

Route::get('/deletefeedback/{id}', [SignupController::class,'deletefeedback']);

Route::get('/custbook',[SignupController::class,'viewcat']);

Route::post('/booking1',[SignupController::class,'bookstore']);

Route::get('/booking1',[SignupController::class,'bookcreate']);

Route::post('/booking2',[SignupController::class,'bookstore1']);

Route::post('/booking3',[SignupController::class,'bookstore2']);

Route::get('/custviewbooks',[SignupController::class,'mybookings']);

Route::post('/changepassword',[SignupController::class,'custchangepassword']);

Route::post('/adminchangepassword',[SignupController::class,'adminchangepassword']);

Route::post('/workerchangepassword',[SignupController::class,'workerchangepassword']);

Route::get('/workerhome',[WorkerController::class,'workerhomecreate']);

Route::get('/workerviewbookings',[WorkerController::class,'viewbookings']);

Route::get('/workerdashboard',[SignupController::class,'workerdashboard']);

Route::get('/adminviewbookings',[SignupController::class,'adminbookview']);

Route::get('/searchworker',[WorkerController::class,'getworkersearch']);

Route::post('/search',[WorkerController::class,'workersearch']);

Route::get('/messages',[MessageController :: class,'adminview']);





Route::get('/home',[SignupController::class,'dashboard']);


Route::get('/workercatread',[WorkerController :: class,'create']);

Route::post('/workercatread',[WorkerController :: class,'store']);


Route::get('/viewteam',[WorkerController :: class,'customerview']);

Route::post('/admin/addworker',[WorkerController :: class,'lstore']);

Route::get('/admin/addworker',[WorkerController :: class,'lcreate']);

Route::get('/editloc/{id}', [LocationController::class,'edit']);

Route::post('/locationeditprocess/{id}', [LocationController::class,'update']);

Route::get('/deletelocation/{id}', [LocationController::class,'delete']);

Route::get('/deletemessages/{id}', [MessageController::class,'delete']);

Route::get('/editcat/{id}', [CategoryController::class,'edit']);

Route::post('/categoryeditprocess/{id}', [CategoryController::class,'update']);

Route::get('/deletecategory/{id}', [CategoryController::class,'delete']);

Route::get('/editsubcat/{id}', [SubcategoryController::class,'edit']);

Route::post('/subcategoryeditprocess/{id}', [SubcategoryController::class,'update']);

Route::get('/deletesubcategory/{id}', [SubcategoryController::class,'delete']);

Route::get('/editworkerp/{id}', [WorkerController::class,'edit']);

Route::post('/workerpeditprocess/{id}', [WorkerController::class,'update']);

Route::get('/editworkero/{id}', [WorkerController::class,'wedit']);

Route::get('/deleteworker/{id}', [WorkerController::class,'delete']);

Route::post('/workeroeditprocess/{id}', [WorkerController::class,'wupdate']);

Route::get('/feedback', [SignupController::class,'fcreate']);

Route::post('/feedback', [SignupController::class,'fstore']);

Route::get('/editcustomer/{id}', [SignupController::class,'edit']);

Route::post('/customereditprocess/{id}', [SignupController::class,'update']);

Route::get('/workerchangestatus', [WorkerController::class,'statuscreate']);

Route::post('/workerchangestatus', [WorkerController::class,'statusupdate']);

Route::get('/report', [SignupController::class,'bookreportcreate']);

Route::post('/report', [SignupController::class,'bookreportupdate']);

Route::get('/viewbookreport', [SignupController::class,'bookreportview']);

Route::get('/viewworkerfeedbacks', [WorkerController::class,'feedbackview']);

Route::get('/sms', [SignupController::class,'sms']);


});

