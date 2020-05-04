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
                        <h4 class="title">Member Invest Area</h4>
                        <p class="category">Click the <b style="color:red;">"Proceed to Invest"</b> button to enter your investment amount</p>
                    </div>
                    
                    <!-- start of invest  code -->
                    <h3><strong class="alert-warning">Important Notice!!!</strong></h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <ol>
                                    <li>Minimum amount to invest is ₦5000.</li><br>
                                    <li>You will be required to pay a recommitment fee of the same initial invest amount.</li><br>
                                    <li> Interest of 30% of total investment will be paid every 10 days. </li><br>
                                    <li>Once paired, you will have 12 hours to complete payment.</li><br>
                                    <li>Failure to make payment before the deadline will result to account suspension.</li>
                                    
                                </ol>
                                
                            </div>
                        </div>
                    </div>
                    <form method="post" role="form" action="">    
                        {{ csrf_field() }}
                        <div class="row">                         
                            <div class="text-center">
                                <a href="{{action('ProvideHelpController@create')}}"  class="btn btn-primary btn-fill btn-wd">Proceed</a>
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