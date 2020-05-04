@extends('main.layouts.default')

@section('content')
<div class="container-fluid" style="margin-bottom:65px;">
        <div class="row">
            <div class="col-md-12" >
                <div class="well" >
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
                    <div class="header">
                        <h4 class="title">Investment Details</h4>
                        <p class="category"> Below are the details of your investment application</p>
                    </div>
                    
                    <!-- start of invest  code -->
                    <h3><strong class="alert-warning">Important Notice!!!</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <ol>
                                    <li>You are required to make payment within the next 36 hours</li><br>
                                    <li>Feel free to raise a support ticket anytime you suspect irregularities.</li><br>
                                    <li> Once you have made succesfull payment, kindly upload your proof of payment. </li><br>
                                    <!-- <li>.</li><br> -->
                                    <li>Failure to make payment before the deadline will result to account suspension.</li>
                                    
                                </ol>
                                
                            </div>

                            <div class="col-md-8">
                                <div class="well">
                                    <ul>
                                        <!-- <li>Name: </li><br> -->
                                        
                                        @foreach($ph_results as $ph_result)
                                            <li><b>Amount: <span style="margin-left:10px; color:red"> {{ $ph_result->ph_amount }} </span></b></li><br>
                                        @endforeach

                                        @foreach($matched_user_results as $result)
                                            <li><b>Phone: <span style="margin-left:10px; color:red"> {{ $result->phone }} </span></b></li><br>
                                            <li><b>Account Name: <span style="margin-left:10px; color:red"> {{ $result->account_name }} </span></b></li><br>
                                            <li><b>Account Number: <span style="margin-left:10px; color:red"> {{ $result->account_number }} </span></b></li><br>
                                            <li><b>Bank Name: <span style="margin-left:10px; color:red"> {{ $result->bank_name }} </span></b></li>
                                        @endforeach
                                    </ul><br><h5>Upload Screenshot of payment below</h5>
                                    <form method="post" enctype="multipart/form-data" role="form" action=" {{ route('investment-details.update',$ph_result->id) }} " >
                                        <p id="time" ></p>
                                        {{ csrf_field() }}
                                        <script>
                                            function currentTime() {
                                                var d = new Date();
                                                var hours = d.getHours();
                                                var mins = d.getMinutes();
                                                var sec = d.getSeconds();
                                                document.getElementById('time').innerHTML = hours+':'+mins+':'+sec;
                                            }
                                            setInterval(currentTime, 1000);
                                        </script>
                                        <div class="form-group  {{$errors->has('image') ? 'has-error' : ''}} ">
                                            <input type="hidden" name="_method" value="PATCH">
                                        @if($ph_result->filename == '')
                                            <input type="file" name="image" class="form-control border-input" required >
                                            @if($errors->has('image'))
                                                <span class="help-block" >
                                                    <strong style="color:red">{{ $errors->first('image') }}</strong>
                                                </span>
                                            @endif

                                        @else
                                            <a target="_blank" href="{{ asset('storage/'.$ph_result->filename.'/'.$ph_result->filename) }}" ><input type="button" class="btn btn-info" value="View Image"></a>
                                        @endif
                                        </div>
                                        

                                        
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="{{ url('home')}}" style="margin-bottom:10px" class="btn btn-default btn-fill btn-wd">Back</a>
                                                @if($ph_result->filename == '')
                                                    <button type="submit" style="margin-bottom:10px"  class="btn btn-success btn-fill btn-wd">Confirm Payment</button>
                                                @endif
                                            </div>
                                        </div>
                                    </form>

                                    <div class='clearfix'></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <form method="post" role="form" action="">    
                        {{ csrf_field() }}
                        <div class="row">                         
                            <div class="text-center">
                                 <a href="{{action('ProvideHelpController@create')}}"  class="btn btn-primary btn-fill btn-wd">Proceed to Invest</a> 
                            </div>
                        </div>
                        <div class='clearfix'></div>
                            
                    </form> -->
                    <!-- end of invest code  -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
   

@endsection