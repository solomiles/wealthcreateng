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
                        <h4 class="title">Harvest Details</h4>
                        <p class="category"> Below are the details of your harvest application</p>
                    </div>
                    
                    <!-- start of invest  code -->
                    <h3><strong class="alert-warning">Important Notice!!!</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <ol>
                                    <li>If you are yet to recieve payments after 36 hours, kindly raise a support ticket to our technical team</li><br>
                                    <li>You might be required to upload a screenshot of your statement of account</li><br>
                                    
                                    <li>Feel free to raise a support ticket whenever you encounter any challenges.</li>
                                    
                                </ol>
                                
                            </div>

                            <div class="col-md-8">
                                <div class="well">
                                    <h5 class="text-center" >Thanks For Your Participation</h5>
                                    <ul style=" list-style:none" >
                                        @foreach($gh_results as $gh_result)
                                            <li><b>Requested Harvest Amount: <span style="margin-left:10px; color:red"> {{ $gh_result->gh_amount }} </span></b></li><br>
                                        @endforeach
                                        <br><br>
                                    @if(count($matched_user_results) == 1)
                                        @foreach($matched_user_results as $result)
                                            <div class="well" >
                                                <h5 class="text-center" >Matched Member Details</h5>
                                            
                                                
                                                    <li><b>Phone: <span style="margin-left:10px; color:red"> {{ $result->phone }} </span></b></li><br>
                                                    <li><b>Name: <span style="margin-left:10px; color:red"> {{ $result->name }} </span></b></li><br>
                                                    
                                            
                                        @endforeach

                                        @foreach($ph_results as $result)
                                        
                                                <li><b>Amount: <span style="margin-left:10px; color:red"> {{ $result->ph_amount }} </span></b></li><br>
                                                @if($result->filename == '')
                                                <li><input type="button" disabled class="btn btn-danger btn-fill" value="Confirm" ></li>
                                                @else
                                                    <div class="btn-group">
                                                        <li><a target="_blank" href="{{ asset('storage/'.$result->filename.'/'.$result->filename) }}" class="btn btn-info btn-fill" >Check Payment</a></li><br>
                                                        <form method="post" action=" {{ route('harvest-details.update',$gh_result->id) }} " role="form">
                                                            {{ csrf_field() }}
                                                                <input type="hidden" name="_method" value="PATCH">
                                                                <input type="hidden" name="ph_id" value=" {{ $result->id }} ">
                                                        @if($result->ph_confirmed == 1)
                                                        @else
                                                            <li><input type="submit" class="btn btn-success btn-fill" value="Confirm" ></li>
                                                        @endif
                                                        </form>
                                                    </div>
                                                @endif
                                                
                                            </div>
                                        @endforeach
                                                
                                            

                                    @endif
                                    </ul>
                                    
                                    <p id="time" ></p>
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
                                        
                                        <div class="row">
                                            <div class="text-center">
                                                <a href="{{ url('home')}}" style="margin-bottom:10px" class="btn btn-default btn-fill btn-wd">Back</a>
                                                
                                            </div>
                                            
                                        </div>
                                    

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