@extends('main.layouts.default')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <div class="header">
                        <h4 class="title">Registration Fee Proof Of Payment Page</h4>
                        <p class="category">image below as appeared in our database</p>
                    </div>
                    <!-- row to display proof images -->
                    @if (count($results) === 1)
                        @foreach ($results as $result)
                            <div class="col-md-6">
                                <div class="col-md-6">
                                
                                    <img class="img img-thumbnail img-responsive" src="{{ asset('storage/'.$result->filename.'/'.$result->filename) }}" alt="hfffk">
                                </div>
                            </div>
                        @endforeach
                    @elseif (count($results) > 1)
                        @foreach ($results as $result)
                            @if($loop->first)
                                <div class="col-md-6">
                                    <div class="col-md-6">
                                    
                                        <img class="img img-thumbnail img-responsive" src="{{ asset('storage/'.$result->filename.'/'.$result->filename) }}" alt="hfffk">
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="col-md-6">
                            <p class="alert alert-warning"><strong>{{'No records found ......'}}</strong></p>
                        </div>
                    @endif
                    <!-- end of row to display proof images -->

                    <!-- row for go home button -->
                    <div class="row" >
                        <div class="col-md-12 btn-group">
                            <div class="text-center">
                            {{ csrf_field() }}
                                <a href="{{ url('dashboard') }}"><input  type="button" class="btn btn-md btn-fill btn-warning" value="Go Home"></a>
                            </div>

                            
                        </div>
                    </div>
                    <!-- end of row for go home button -->

                </div>
            </div>
        </div>
    </div>

@endsection