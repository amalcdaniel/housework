<?php

namespace App\Http\Controllers;

use App\Models\SubcategoryModel;

use App\Models\CategoryModel;


use Illuminate\Http\Request;

class SubcategoryController extends Controller
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
        return view("Adminhome");
    }

    public function adminview()
    {
        $subcatcount=SubcategoryModel::count();
        if($subcatcount==0)
        {
            return view('NotFound');
        }
        $subcategory=SubcategoryModel::all();

        return view('Adminviewsubcat',compact('subcategory'));
        
        

    }
    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $getscategory=request("scategory");
        $getsubcategory=request("subcategory");
        $getpayment=request("payment");
        $userInfo = CategoryModel::where('Category','=', $getscategory)->first();
        $subcategory = new SubcategoryModel();
        $subcategory->Categoryid=$userInfo->id;
        $subcategory->Subcategory=$getsubcategory;
        $subcategory->Payment=$getpayment;
        $subcategory->save();

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
        
        $subcategoryview=SubcategoryModel::find($id);

        return view('Admineditsubcat',compact('subcategoryview'));
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
        $subcategory=SubcategoryModel::find($id); 
        $getsubcategory=request("subcategory");
        $getpayment=request("payment");
        $subcategory->Subcategory=$getsubcategory;
        $subcategory->Payment=$getpayment;
        $subcategory->save();

        return redirect('/adminviewsubcat#categories');
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

    public function delete($id)
    {
        try{
        $data=SubcategoryModel::find($id);
        $data->delete();
        return redirect('/adminviewsubcat#categories');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }
}
