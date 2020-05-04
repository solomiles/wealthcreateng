<?php

namespace App\Http\Controllers;

// use App\ProvideHelp;
use App\User;
use App\ProvideHelp;
use Illuminate\Http\Request;

class ProvideHelpController extends Controller
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
        
        return view('ProvideHelp.index');
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
        // foreach($results as $result){
        //     echo $result->ph_amount;
        // }
        // // echo $id;
        // exit();
        return view('ProvideHelp.create', compact('results'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param int $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $user_id = $_GET['id'];
        // die($user);
        function generateRandomString($length = 6) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
            
        }
        $ph_id = generateRandomString();
        // echo $ph_id;
        // exit;
        $this->validate($request, [
            
                'ph_amount' => 'required|numeric|min:5000|max:500000',
    
                
    
            ]);
        $id = $request->user()->id;
        $ph_amount = $request->ph_amount;
        // echo($ph_amount);
        // exit();
        $providehelp = new ProvideHelp;
        $providehelp->ph_amount = $ph_amount;
        $providehelp->ph_id = $ph_id;
        $providehelp->user_id =$id;
        $providehelp->save();
        
            return redirect()->route('dashboard.index')
    
                ->with('success','Investment application recieved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProvideHelp  $provideHelp
     * @return \Illuminate\Http\Response
     */
    public function show(ProvideHelp $provideHelp)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProvideHelp  $provideHelp
     * @return \Illuminate\Http\Response
     */
    public function edit(ProvideHelp $provideHelp)
    {
        //
    }


    
    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function adminph(Request $request)
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
        $ph_id = generateRandomString();
        // echo $ph_id;
        // exit;
        $this->validate($request, [
            
            'ph_amount' => 'required|numeric|min:1000|max:500000',
    
                
    
        ]);
        $id = $request->user_id;
        $ph_amount = $request->ph_amount;
        // echo($ph_amount);
        // exit();
        $providehelp = new ProvideHelp;
        $providehelp->ph_amount = $ph_amount;
        $providehelp->ph_id = $ph_id;
        $providehelp->user_id =$id;
        $providehelp->save();
        
        return redirect()->route('backoffice.index')

            ->with('success','PH application recieved successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProvideHelp  $provideHelp
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ph_match = $request->ph_match;
        $ph_amount = $request->ph_amount;
        
        $find_ph = ProvideHelp::find($id);
        $find_ph->ph_matched = $ph_match;
        $find_ph->ph_amount = $ph_amount;
        $find_ph->update();
        
            return redirect()->route('backoffice.index')
    
                ->with('success','Provide Help request updated successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProvideHelp  $provideHelp
     * @return \Illuminate\Http\Response
     * @param int $id
     */
    public function destroy(ProvideHelp $provideHelp, $id)
    {
        //
        ProvideHelp::find($id)->delete();
        
            return redirect()->route('backoffice.index')
    
                ->with('success','Provide help request deleted successfully');
    
    }
}
