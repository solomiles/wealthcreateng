@extends('main.layouts.default')

@section('content')


   <!-- start of main page -->
    <!-- I JUST HIT THIS PAGE HURRAY!!! -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" >
                <div class="well" >
                    <div class="header">
                        <h4 class="title">Invest And Harvest</h4>
                        <p class="category">Invest into the community and get rewarded with 30% of Total Investment Every 10 days</p>
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


                    <!-- row for provide and get help buttons -->
                    <div class="row" style=" padding: 20px 0 40px;" >
                        <div class="col-md-12 btn-group">
                        @if (count($results) < 2)
                            <div style="margin-bottom:20px;" class="col-md-4 col-md-offset-2">
                            {{ csrf_field() }}
                                <a href="{{url('invest') }}"><input style="  padding: 70px 90px 70px;"  type="button" class="btn btn-lg btn-fill btn-info" value="Invest"></a>
                            </div>
                        @else
                        @endif

                            <div class="col-md-4 col-md-offset-2">
                            <a href="{{url('harvest') }}"><input style="  padding: 70px 90px 70px;"  type="button" class="btn btn-lg btn-fill btn-info" value="Harvest"></a>
                            </div>
                        </div>
                    </div>
                    <!-- end of row for provide and get help buttons -->
                    <br>
                    @if (count($results) > 0)
                    <!-- row for ph pending status -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <div class="col-sm-8">
                                                <button id="ph_hide_button" style="margin-bottom:10px" class="form-control border-input btn btn-sm btn-default" ><span class="ti-eye" > </span>Hide/Show ph Stats</button>
                                            </div>
                                        </div>
                                    </div><br>
                                    @foreach($results as $result)
                                        <section>
                                            @if($result->ph_confirmed == 1)
                                            <div class="alert alert-succes">
                                            @else
                                            <div class="alert alert-warning">
                                            @endif
                                                <h5>Investment stats</h5>
                                                <h6>PH {{ $result->ph_id }}</h6>
                                                <div class="row"> 
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Date:
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8 col-sm-offset-1">
                                                        <div class="btn-default">
                                                            {{ $result->created_at }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Amount
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8 col-sm-offset-1">
                                                        <div class="btn-default">
                                                        {{ $result->ph_amount }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Status:
                                                        </div>
                                                    </div>
                                                    @if($result->ph_confirmed == 1)
                                                        <div class="col-sm-8 col-sm-offset-1">
                                                            
                                                            <div class="alert-warning">
                                                                <b>Completed</b>
                                                            </div>
                                                            
                                                        </div>
                                                    @else
                                                        <div class="col-sm-8 col-sm-offset-1">
                                                            @if($result->ph_matched == 0)
                                                                <div class="alert-danger">
                                                                    Pending
                                                                </div>
                                                            @else
                                                                <div class="alert-success">
                                                                    matched
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endif
                                                    
                                                </div>
                                                @if($result->ph_matched != 0)
                                                    <div style="margin-top: 4px;" class="row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                        <a href="{{action('InvestStatsController@show',$result->ph_id)}}">
                                                            <input type="" style="padding: 0 25px 0;" class="btn btn-fill btn-sm btn-success" value="Click For Details">
                                                        </a>
                                                        </div>
                                                    </div>
                                                @endif
                                                
                                            </div>
                                        </section>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    <!-- end of row for ph pending status  -->
                @endif

                    {{$id}}
                    <!-- row for Harvest pending status -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                            
                                
                                @if ( count( $ghResults ) > 0 )
                                    <div class="row">
                                        <div class="col-sm-12">
                                            
                                            <div class="col-sm-8">
                                                <button id="gh_hide_button" style="margin-bottom:10px" class="form-control border-input btn btn-sm btn-default" ><span class="ti-eye"> </span>Hide/Show gh Stats</button>
                                            </div>
                                        </div>
                                    </div><br>
                                    @foreach( $ghResults as $ghResult )
                                        <aside>
                                            @if($ghResult->gh_confirmed == 1)
                                                <div class="alert alert-succes">
                                            @else
                                                <div class="alert alert-warning">
                                            @endif
                                                <h5>Harvest stats</h5>
                                                <h6>GH {{ $ghResult->gh_id }}</h6>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Date:
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8 col-sm-offset-1">
                                                        <div class="btn-default">
                                                            {{ $ghResult->created_at }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Amount
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8 col-sm-offset-1">
                                                        <div class="btn-default">
                                                            {{ $ghResult->gh_amount }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="btn-default">
                                                            Status:
                                                        </div>
                                                    </div>
                                                    @if($ghResult->gh_confirmed == 1)
                                                        <div class="col-sm-8 col-sm-offset-1">
                                                            
                                                            <div class="alert-warning">
                                                                <b>Completed</b>
                                                            </div>
                                                            
                                                        </div>
                                                    @else
                                                        <div class="col-sm-8 col-sm-offset-1">
                                                            @if($ghResult->gh_matched == 0)
                                                                <div class="alert-danger">
                                                                    Pending
                                                                </div>
                                                            @else
                                                                <div class="alert-success">
                                                                    matched
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endif
                                                    
                                                </div>
                                                @if($ghResult->gh_matched != 0)
                                                    <div style="margin-top: 4px;" class="row">
                                                        <div class="col-sm-8 col-sm-offset-4">
                                                        <a href="{{action('HarvestStatsController@show',$ghResult->gh_id)}}">
                                                            <input type="" style="padding: 0 25px 0;" class="btn btn-fill btn-sm btn-success" value="Click For Details">
                                                        </a>
                                                        </div>
                                                    </div>
                                                @endif
                                                

                                            </div>
                                        </aside>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- end of row for harvest pending status  -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
    


@endsection