<?php

namespace App\Http\Controllers;
use App\User;
use App\ProvideHelp;
use App\GetHelp;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HarvestStatsController extends Controller

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
        
        $gh_id = $id;//to get the provide help id

        // searching for the provide help id in the database
        $gh_results = DB::select('select * from get_helps where gh_id = ?', [$gh_id]);
        
        // print_r( $results);
        foreach ($gh_results as $result) {
            # code...
            $gh_matched = $result->gh_matched;
        }
        // end of searching for the provide help id
        // to get the matched user to recieve help
        $ph_results = DB::select('select * from provide_helps where ph_matched = ?', [$gh_matched]);//use this to find the uploaded image

        foreach ($ph_results as $result) {
            # code...
            $ph_user_id = $result->user_id;
            // echo $gh_user_id;
        }
        $matched_user_results = DB::select('select * from users where id = ?', [$ph_user_id]);
        // end of "to get the matched user to recieve halp"

        // print_r( $results);
        // echo '<br> user= '.$user_id;
        // $matched_time = time();//taking login time
        // $matched_expire = $matched_time + (130 * 60);//ending the session in 4 hours

        // exit;
        return view('InvestStats.gh-details', compact('ph_results','gh_results','matched_user_results') );
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
        // echo $id;
        $ph_id = $request->ph_id;
        // exit;
        $update_gh = GetHelp::find($id);
        $update_gh->gh_confirmed = 1;
        $update_gh->update();

        $update_ph = ProvideHelp::find($ph_id);
        $update_ph->ph_confirmed = 1;
        $update_ph->update();

        return redirect()->route('dashboard.index')
            ->with('success','Application Cycle Confirmed And Completed');
        

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
