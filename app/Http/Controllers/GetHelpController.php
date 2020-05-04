<?php

namespace App\Http\Controllers;

use App\GetHelp;
use App\User;
use App\ProvideHelp;
use Illuminate\Http\Request;

class GetHelpController extends Controller
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
        return view('GetHelp.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $id = $request->user()->id;
        $results =  User::find($id)->invest;
        return view('GetHelp.create', compact('results'));
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
        function generateRandomString($length = 6) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
            
        }
        $gh_id = generateRandomString();

        $id = $request->user()->id;

        $results =  User::find($id)->invest;
        
        
        foreach ($results as $result){
            
            $oldPh_amount = $result->ph_amount;
            
        }
        // echo $oldPh_amount;
        // echo $id;
        // exit;

        $this->validate($request, [
            'ph_amount' => 'required|numeric|min:'.$oldPh_amount,

        ]);
        $gh_amount = $request->gh_amount;
        $ph_amount = $request->ph_amount;
        // echo $gh_amount.'<br>'.$ph_amount.'<br>'.$gh_id;
        // exit;
        $gethelp = new GetHelp;
        $gethelp->gh_amount = $gh_amount;
        $gethelp->gh_id = $gh_id;
        $gethelp->user_id = $id;
        $gethelp->save();

        $providehelp = new ProvideHelp;
        $providehelp->ph_amount = $ph_amount;
        $providehelp->ph_id = $gh_id;
        $providehelp->user_id = $id;
        $providehelp->save();

        return redirect()->route('dashboard.index')
            ->with('success','Harvest application recieved successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GetHelp  $getHelp
     * @return \Illuminate\Http\Response
     */
    public function show(GetHelp $getHelp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function admingh(Request $request)
    {
        //
        function generateRandomString($length = 6) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
            
        }
        $gh_id = generateRandomString();
        // echo $ph_id;
        // exit;
        $this->validate($request, [
            
            'gh_amount' => 'required|numeric|min:1000|max:500000',
    
                
    
        ]);
        $id = $request->user_id;
        $gh_amount = $request->gh_amount;
        // echo($ph_amount);
        // exit();
        $gethelp = new GetHelp;
        $gethelp->gh_amount = $gh_amount;
        $gethelp->gh_id = $gh_id;
        $gethelp->user_id =$id;
        $gethelp->save();
        
        return redirect()->route('backoffice.index')

            ->with('success','GH application recieved successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GetHelp  $getHelp
     * @return \Illuminate\Http\Response
     */
    public function edit(GetHelp $getHelp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GetHelp  $getHelp
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $gh_match = $request->gh_match;
        $gh_amount = $request->gh_amount;

        $find_gh = GetHelp::find($id);
        $find_gh->gh_matched = $gh_match;
        $find_gh->gh_amount = $gh_amount;
        $find_gh->update();
        
            return redirect()->route('backoffice.index')
    
                ->with('success','Get Help request updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GetHelp  $getHelp
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function destroy(GetHelp $getHelp, $id)
    {
        //
        // echo $id;
        // exit;
        GetHelp::find($id)->delete();
        
            return redirect()->route('backoffice.index')
    
                ->with('success','Get help request deleted successfully');
    }
}
