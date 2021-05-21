<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MessageModel;

class MessageController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getname=request("name");
        $getemail=request("email");
        $getsubject=request("subject");
        $getmessage=request("message");

        $message=new MessageModel();
        $message->Name=$getname;
        $message->Email=$getemail;
        $message->Subject=$getsubject;
        $message->Message=$getmessage;
        $message->save();

        return view('index');

    }

    public function adminview()
    {
        $messagecount=MessageModel::count();
        if($messagecount==0)
        {
            return view('NotFound');
        }
        $message=MessageModel::all();
        


        return view('Adminviewmessages',compact('message'));
    }

    public function delete($id)
    {
        try{
            $data=MessageModel::find($id);
            $data->delete();
            return redirect('/messages#customer');
            
        } catch (\Illuminate\Database\QueryException $e) {
            echo "<script>alert('Cannot delete or update a parent row: a foreign key constraint fails');window.location='/adminhome';</script>"; 
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
        //
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
        //
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
}
