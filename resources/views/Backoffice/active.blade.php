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
                        <h4 class="title">All Registered Members</h4>
                        <p class="category">List of all WealthCreateNG members</p>
                    </div><br><br>
                    
                    <!-- start of support interface main  code -->
                    
                    <hr>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="fa fa-edit"></span>All Members Details
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTables-example" class="table table-striped table-condensed table-hover" >
                                            <thead style="font-size:16px">
                                                <th>s/n</th>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                               
                                                <th>Email</th>
                                                <th>Paid Reg Fee</th>
                                                
                                                <th>Date</th>
                                                <th>Confirm</th>
                                                <th>Block</th>
                                            </thead>
                                            <tbody>
                                            @if ($results->count())
                                            @for($i=1;$i>1;)
                                            @endfor
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $result->id }}</td>
                                                        
                                                        <td>{{ $result->name }}</td>
                                                        <td> {{ $result->email }} </td>
                                                        <td>
                                                            @if( $result->paid_registration_fee == 0 )
                                                                <span class="badge badge-warning">Pending</span>
                                                            @elseif( $result->paid_registration_fee == 1 )
                                                                <span class="badge badge-success">Paid</span>
                                                            @endif
                                                        </td>
                                                        <td> {{ $result->created_at }} </td>
                                                        <td>
                                                        @if( $result->paid_registration_fee == 0 )
                                                            <form method="post" role="form"  action=" {{ URL::to('paid') }} ">
                                                                {{csrf_field()}}
                                                                <!-- <input type="hidden" name="_method" value="PATCH"> -->
                                                                <input type="hidden" name="user_id" value="{{$result->id}}">
                                                                <button type="submit" class="btn btn-info"><span class="fa fa-save"></span></button>
                                                            </form>
                                                        @elseif( $result->paid_registration_fee == 1 )
                                                            <button disabled class="btn btn-info"><span class="fa fa-save"></span></button>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @if( $result->block == 0 )
                                                            <form method="post" role="form"  action=" {{ URL::to('block') }} ">
                                                                {{csrf_field()}}
                                                                <!-- <input type="hidden" name="_method" value="PATCH"> -->
                                                                <input type="hidden" name="user_id" value="{{$result->id}}">
                                                                <button type="submit" class="btn btn-danger"><span class="fa fa-eraser"></span></button>
                                                            </form>
                                                        @elseif( $result->block == 1 )
                                                            <button disabled class="btn btn-danger"><span class="fa fa-eraser"></span></button>
                                                        @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- end of support interface main code -->
                </div>
            </div>
        </div>
    </div>
@endsection