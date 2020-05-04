<?php

namespace App\Http\Controllers;

use App\User;
use App\Edit_Profile;
use Illuminate\Http\Request;

class EditProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('User.index');
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
        // $this->validate($request, [
            
        //         'staff_name' => 'required',
    
        //         'staff_email' => 'required',
    
        //     ]);
        // User::create($request->all());
        
        //     return redirect()->route('User.index')
    
        //         ->with('success','User added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edit_Profile  $edit_Profile
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edit_Profile  $edit_Profile
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edit_Profile  $edit_Profile
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    protected function update(Request $request, $id)
    {
        //
        $user = User::find($id)->update($request->all());
        
            return redirect()->route('user.index')
    
                ->with('success','User Records updated successfully!!!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edit_Profile  $edit_Profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edit_Profile $edit_Profile)
    {
        //
    }
}
