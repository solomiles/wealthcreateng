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
                        <p class="category">Please your recommitment cannot be less than your initial investment amount, click <b style="color:red;">"Harvest"</b> button to continue</p>
                    </div><br><br>
                    
                    <!-- start of invest  code -->
                    <form method="post" role="form" action="{{route('harvest.store' )}}">    
                        {{ csrf_field() }}
                        <div class="row">
                            
                                    
                                    <!--  -->
                                
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Next Investment Amount</label>
                                    </div>
                                </div>
                                @if (count($results) > 0)
                                    @foreach ($results as $result)
                                    
                                        @if($loop->last)
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('ph_amount') ? ' has-error' : '' }} ">
                                                    <input type="text"  class="form-control border-input" name="ph_amount" placeholder="Amount" value="{{ $result->ph_amount }}">
                                                    @if ($errors->has('ph_amount'))
                                                        <span class="help-block">
                                                            <strong style="color:red;">{{ $errors->first('ph_amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                 @elseif (count($results) > 1)
                                    @foreach ($results as $result)
                                    
                                        @if($loop->first)
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('ph_amount') ? ' has-error' : '' }} ">
                                                    <input type="text"  class="form-control border-input" name="ph_amount" placeholder="Amount" value="{{ $result->ph_amount }}">
                                                    @if ($errors->has('ph_amount'))
                                                        <span class="help-block">
                                                            <strong style="color:red;">{{ $errors->first('ph_amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    
                                @endif
                                
                            </div>
                            
                        </div><br>
                        <!-- harvest section -->
                        <div class="row">
                            
                                    
                            <!--  -->
                                
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Harvest Amount</label>
                                    </div>
                                </div>
                                @if (count($results) === 1)
                                    @foreach ($results as $result)
                                    
                                        @if($loop->first)
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('gh_amount') ? ' has-error' : '' }} ">
                                                    <input type="text" required readonly class="form-control border-input" name="gh_amount" placeholder="Amount" value="{{ $result->ph_amount * 0.3 + $result->ph_amount }}">
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @elseif (count($results) > 1)
                                    @foreach ($results as $result)
                                    
                                        @if($loop->first)
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <input type="text" required readonly class="form-control border-input" name="gh_amount" placeholder="Amount" value="{{ $result->ph_amount * 0.3 + $result->ph_amount}}">
                                                    @if ($errors->has('gh_amount'))
                                                        <span class="help-block">
                                                            <strong style="color:red;">{{ $errors->first('gh_amount') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                
                                @else
                                    
                                @endif
                                
                            </div>
                            
                        </div><br><br>

                        <div class="row">
                            <div class="text-center">
                                <a href="{{ url('home')}}" style="margin-bottom:10px" class="btn btn-default btn-fill btn-wd">Back</a>
                                <button type="submit" style="margin-bottom:10px"  class="btn btn-success btn-fill btn-wd">Harvest</button>
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