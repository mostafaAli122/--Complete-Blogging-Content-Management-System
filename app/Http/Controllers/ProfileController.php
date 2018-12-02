<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user',Auth::user())
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'facebook'=>'required|url',
            'youtube'=>'required|url'
        ]);
        $user=Auth::user();
        if ($request->hasfile('image') ) {
            $image=$request->image;
            $image_new_name=time().$image->getClientOriginalName();
            $image->move('uploads/images',$image_new_name);
            $user->profile->image='uploads/images/'.$image_new_name;
            $user->profile->save();
        }
        $user->name=$request->name;
        $user->email=$request->email;
        $user->profile->facebook=$request->facebook;
        $user->profile->youtube=$request->youtube;
        $user->save();
        $user->profile->save(); 
        if($request->has('password')){
            $user->password=bcrypt($request->password);
            $user->save();
        }
        Session::flash('success','Account Profile Info Updated .');
        return redirect()->back();
        

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
