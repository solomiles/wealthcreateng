@extends('main.layouts.default')

@section('content')


   <!-- start of main page -->
    <!-- I JUST HIT THIS PAGE HURRAY!!! -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="well" >
                    <div class="header">
                        <h4 class="title">Upload Proof Of Payment Page</h4>
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
                                <h5><strong>If you have successfully paid the registration fee of ₦3,000 </strong></h5>
                                <small>Please kindly upload proof of payment below</small><br><br><br>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end of row for account details -->

                    <!-- row for confirm payment button -->
                    <div class="row" >
                        <form method="post" action="{{ URL::to('upload') }}" role="form" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }} ">
                                    <label>Upload ScreenShot:</label>
                                    <input type="file" class="form-control border-input" name="image">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong style="color:red" > {{ $errors->first('image') }} </strong>
                                        </span>
                                    @endif
                                </div>
                            </div><br>
                            <div class="col-md-12 btn-group">
                                <div class="text-center">
                                {{ csrf_field() }}
                                    <a href="{{url('home')}}"><input style="margin-bottom:10px" type="button" class="btn btn-lg btn-fill btn-primary" value="Back"></a>
                                    <input style="margin-bottom:10px" type="submit" class="btn btn-lg btn-fill btn-success" value="Confirm Payment">
                                    
                                </div>

                                
                            </div>
                        </form>
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