@extends('main.layouts.default')

@section('content')


   <!-- start of main page -->
    <!-- I JUST HIT THIS PAGE HURRAY!!! -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="well" >
                    <div class="header">
                        <h4 class="title">Registration Fee Page</h4>
                        <p class="category">Before Investing into the Community you are required to pay a token for registration fee </p>
                    </div>

                    @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>
                    
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <!-- <div class="header">
                        <h4 class="title">Member Invest Area</h4>
                        <p class="category">Click the <b style="color:red;">"Proceed to Invest"</b> button to enter your investment amount</p>
                    </div> -->

                    <!-- row for account details -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h5><strong>You are required to pay the sum of ₦3,000 for registration fee</strong></h5>
                                <small>Below is the account details</small><br><br>
                                <ul style="list-style:none">
                                    <li>Bank Name: <span style="color:red; margin-left:10px"> Admin</span></li><br>
                                    <li>Account Number: <span style="color:red; margin-left:10px"> Admin</span></li><br>
                                    <li>Account Name: <span style="color:red; margin-left:10px"> Admin</span></li><br>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                
                            </div>
                        </div>
                    </div>
                    <!-- end of row for account details -->

                    <!-- row for confirm payment button -->
                    <div class="row" >
                        <div class="col-md-12 btn-group">
                            <div class="text-center">
                        @if(!count($results))
                        
                        <a href="{{ action('RegFeeController@index') }}"><input  style="margin-bottom:10px;" type="button" class="btn btn-md btn-fill btn-info" value="Confirm Payment"></a>

                        @elseif (count($results) == 1)
                            @foreach ($results as $result)
                                <a target="_blank" href="{{ asset('storage/'.$result->filename.'/'.$result->filename) }}"><input style="margin-bottom:10px;" type="button"  class="btn btn-md btn-fill" value="View Proof of Payment"></a>
                            @endforeach
                        @endif
                        
                               
                            </div>

                            
                        </div>
                    </div>
                    <!-- end of row for confirm payment button -->
                    <br>
                    {{$id}}
                    

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
    


@endsection