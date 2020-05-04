<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Support;
use App\User;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct() {

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
        $id = $request->user()->id;
        $results =  User::find($id)->support;
        
        
        return view('Support.index',compact('results'));
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
        // echo "hit";
        // exit;
        function generateRandomString($length = 4) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
            
        }
        $ticket_id = generateRandomString();

        $id = $request->user()->id;
        $name = $request->user()->name;
        $title = $request->title;
       
        $description = $request->description;

        $store = new Support;

        $store->user_id = $id;

        $store->ticket_id = $ticket_id;

        $store->name = $name;

        $store->title = $title;

        $store->description = $description;

        $store->save();

        return redirect()->route('support.index')

            ->with('success','Ticket Created And Submitted Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        //
        
        $id = $support->id;
        
        $results = Support::find($id);
        // foreach($results as $result){

        // echo $results->title;
        // exit;
        // }
        return view('Support.edit', compact('results'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        //

        $id = $support->id;

        $title = $request->title;
        

        $description = $request->description;

        $update = Support::find($id);

        $update->title = $title;

        $update->description = $description;

        $update->update();

        return redirect()->route('support.index')

            ->with('success','Ticket Updated And Submitted Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        //
    }
}
