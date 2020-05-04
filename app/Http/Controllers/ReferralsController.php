<?php

namespace App\Http\Controllers;

use App\Referrals;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReferralsController extends Controller
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
    public function index(Request $request)
    {
        //
        $referral_code = $request->user()->code;

        $results = DB::select('select * from users where referrer = ?', [$referral_code]);
        // die($results);

        return view('Downline.index', compact('results'));
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
     * @param  \App\Referrals  $referrals
     * @return \Illuminate\Http\Response
     */
    public function show(Referrals $referrals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Referrals  $referrals
     * @return \Illuminate\Http\Response
     */
    public function edit(Referrals $referrals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Referrals  $referrals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referrals $referrals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Referrals  $referrals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referrals $referrals)
    {
        //
    }
}
