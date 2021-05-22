<?php

namespace App\Http\Controllers;

use App\Models\LocationModel;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locationview=LocationModel::all();

        return view('Addworker',compact('locationview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Adminhome');
    }

    public function adminview()
    {
        $locationcount=LocationModel::count();
        if($locationcount==0)
        {
            return view('NotFound');
        }
        $locationview=LocationModel::all();

        return view('Adminviewloc',compact('locationview'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $getlocation=request("location");

        $location= new LocationModel;
        $location->Location=$getlocation;
        $location->save();

        return redirect('/adminhome');
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
        $locationview=LocationModel::find($id);

        return view('Admineditloc',compact('locationview'));
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
        $location=LocationModel::find($id); 
        $getlocation=request("location");
        $location->Location=$getlocation;
        $location->save();
       
        return redirect('/adminviewloc#location');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try{
            $data=LocationModel::find($id);
            $data->delete();
            return redirect('/adminviewloc#location');
            
        } catch (\Illuminate\Database\QueryException $e) {
            echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
        }
    }
}
