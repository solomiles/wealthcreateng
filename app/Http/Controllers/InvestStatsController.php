<?php

namespace App\Http\Controllers;

use App\User;
use App\ProvideHelp;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestStatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $ph_id = $request->id;
        // echo $ph_id;
        // exit();
        // return view('InvestStats.ph-details');
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
    public function show( Request $request, $id)
    {
        //
        // echo $id.'<br>';
        $user_id = $request->user()->id;//to get the instance of the user

        $ph_id = $id;//to get the provide help id

        // searching for the provide help id in the database
        $ph_results = DB::select('select * from provide_helps where ph_id = ?', [$ph_id]);
        
        // print_r( $results);
        foreach ($ph_results as $result) {
            # code...
            $ph_matched = $result->ph_matched;
        }
        // end of searching for the provide help id
        // to get the matched user to recieve help
        
        $gh_results = DB::select('select * from get_helps where gh_matched = ?', [$ph_matched]); //use this to find the uploaded image

        foreach ($gh_results as $result) {
            # code...
            $gh_user_id = $result->user_id;
            // echo $gh_user_id;
        }
        $matched_user_results = DB::select('select * from users where id = ?', [$gh_user_id]);
        // end of "to get the matched user to recieve halp"

        // print_r( $results);
        // echo '<br> user= '.$user_id;
        // $matched_time = time();//taking login time
        // $matched_expire = $matched_time + (130 * 60);//ending the session in 4 hours

        // exit;
        return view('InvestStats.ph-details', compact('ph_results','gh_results','matched_user_results') );
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
        // $id = $request->user()->id;
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

        $upload = ProvideHelp::find($id);
        $upload->filename = $filename;

        

        $upload->save();
    //     $uploadid = $upload->id;
    // //   return response()->json([
    // //     'id' => $upload->id
    // //   ]);
        return redirect()->route('dashboard.index')
            ->with('success','File Uploaded successfully');
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
