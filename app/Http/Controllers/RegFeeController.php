<?php

namespace App\Http\Controllers;

use App\RegFee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegFeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *@param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $id = $request->user()->id;
        return view('Dashboard.uploadregistrationfee',compact('id'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        //
        $id = $request->user()->id;
        // die($request->file('image')->getClientOriginalName());
        // $path = Storage::disk('local')->putFileAs(
        //     'files/', $request->file('file'), $request->user()->id
        // );
        $this->validate($request,[
            'image' => 'required|file|max:60',

        ]);
        
        $uploadedFile = $request->file('image');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/'.$filename,
            $uploadedFile,
            $filename
        );

        $upload = new RegFee;
        $upload->filename = $filename;

        $upload->user()->associate($id);

        $upload->save();
        $uploadid = $upload->id;
    //   return response()->json([
    //     'id' => $upload->id
    //   ]);
        return redirect()->route('dashboard.index')
            ->with('success','File Uploaded successfully');
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
     * @param \Illuminate\Http\Request $request
     * @param  \App\RegFee  $regFee
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(RegFee $regFee, Request $request)
    {
        //
         //
         $id = $request->user()->id;
        //  $users = DB::select('select * from users where active = ?', [1]);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegFee  $regFee
     * @return \Illuminate\Http\Response
     */
    public function edit(RegFee $regFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegFee  $regFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegFee $regFee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegFee  $regFee
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegFee $regFee)
    {
        //
    }
}
