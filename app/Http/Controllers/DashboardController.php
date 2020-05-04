<?php

namespace App\Http\Controllers;
use App\User;
use App\RegFee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        //
        $id = $request->user()->id;
        // $paid_reg_fee = $user->paid_registration_fee;
        $result = User::find($id);
        $paid_reg_fee = $result->paid_registration_fee;
        $results =  User::find($id)->files;

        if ($paid_reg_fee == 0) {
            # code...
            return view('Dashboard.payregistrationfee',compact('id','results'));
        }
        else {
            # code...
            $results = User::find($id)->invest;
            $ghResults = User::find($id)->harvest;

            return view('Dashboard.index',compact('results','ghResults','id'));
        }
    
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
