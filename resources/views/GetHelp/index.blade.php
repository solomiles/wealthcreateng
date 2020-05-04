@extends('main.layouts.default')

@section('content')
<div class="container" style="margin-bottom:65px;">
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
                        <h4 class="title">Member Harvest Area</h4>
                        <p class="category">Click the <b style="color:red;">Proceed</b> button to harvest</p>
                    </div>
                    
                    <!-- start of invest  code -->
                    <h3><strong class="alert-warning">Important Notice!!!</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <ol>
                                    
                                    <li>You will be required to pay a recommitment fee of the same initial invest amount after a successful harvest.</li><br>
                                    <li>If you are yet to recieve payments after 12 hours, kindly raise a support ticket to our technical team</li><br>
                                    
                                    <li>Feel free to raise a support ticket whenever you encounter any challenges.</li>
                                    
                                </ol>
                                
                            </div>
                        </div>
                    </div>
                    <form method="post" role="form" action="">    
                        {{ csrf_field() }}
                        <div class="row">                         
                            <div class="text-center">
                                <a href="{{action('GetHelpController@create')}}"  class="btn btn-primary btn-fill btn-wd">Proceed</a>
                            </div>
                        </div>
                        <div class='clearfix'></div>
                            
                    </form>
                    <!-- end of invest code  -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
   

@endsection