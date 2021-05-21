<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;

use App\Models\SubcategoryModel;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['category'=>CategoryModel::all()];
        return view ('Adminhome',$data);
        

    }

   

    public function adminview()
    {
        $categorycount=CategoryModel::count();
        if($categorycount==0)
        {
            return view('NotFound');
        }
        $categoryview=CategoryModel::all();

        return view('Adminviewcat',compact('categoryview'));
        

    }

    public function getAllCategory()
    {
        $data = ['category'=>CategoryModel::all()];
        return view ('Addworker',$data);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getcategory=request("category");

        $category= new CategoryModel;
        $category->Category=$getcategory;
        $category->save();

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
        $categoryview=CategoryModel::find($id);

        return view('Admineditcat',compact('categoryview'));
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
        $category=CategoryModel::find($id); 
        $getcategory=request("category");
        $category->Category=$getcategory;
        $category->save();
       
        return redirect('/adminviewcat#categories');

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
        $data=CategoryModel::find($id);
        $data->delete();
        return redirect('/adminviewcat#categories');
        
    } catch (\Illuminate\Database\QueryException $e) {
        echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
    }
    }
}
