<?php

namespace App\Http\Controllers;

use App\User;
use App\GetHelp;
use App\ProvideHelp;
use App\Support;
use App\RegFee;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provide_helps = ProvideHelp::all();

        $get_helps = GetHelp::all();
        
        return view('Backoffice.index', compact('provide_helps','get_helps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $results = Support::all();
        
        return view('BackOffice.support',compact('results'));
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
     * @return \illuminate\Http\Response
     */
    public function active()
    {
        $results = User::all();

        return view('Backoffice.active', compact('results'));
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \illuminate\Http\Response
     * @param int $id
     */
    public function confirmregfee(Request $request)
    {
        // echo 'hit';
        // exit;
        $id = $request->user_id;
        $result = User::find($id);
        $result->paid_registration_fee = 1;
        $result->update();

        return redirect()->route('backoffice.index')
            ->with('success','Payment Of Registration Fee Confirmed Successfully');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \illuminate\Http\Response
     * @param int $id
     */
    public function blockUser(Request $request)
    {
        $id = $request->user_id;
        $result = User::find($id);
        $result->block = 1;
        $result->update();

        return redirect()->route('backoffice.index')
            ->with('success','Member Blocked Successfully');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewfee()
    {
        //
        $results = RegFee::all();

        return view('Backoffice.viewRegFee', compact('results'));
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
        $result = Support::find($id);

        $result->remark = 1;
        $result->update();

        return redirect()->route('backoffice.create')
            ->with('success', 'Ticket Resolved Succesfully!');
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
        // echo $id;
        // exit;
    }
}
