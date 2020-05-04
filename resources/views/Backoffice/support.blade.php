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
                        <h4 class="title">All Open Tickets</h4>
                        <p class="category">List of all created tickets</p>
                    </div><br><br>
                    
                    <!-- start of support interface main  code -->
                    
                    <hr>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="fa fa-edit"></span>All Open Tickets
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTables-example" class="table table-striped table-hover table-condensed" role="table">
                                            <thead style="font-size:16px">
                                                <th>S/N</th>
                                                <th>Ticket ID</th>
                                                <th>User ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Remark</th>
                                                <th>Date</th>
                                                <th>Confirm</th>
                                            </thead>
                                            <tbody>
                                            @if ($results->count())
                                            @for($i=1;$i>1;)
                                            @endfor
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>#{{ $result->ticket_id }}</td>
                                                        <td>{{ $result->user_id }}</td>
                                                        <td>{{ $result->title }}</td>
                                                        <td> {{ $result->description }} </td>
                                                        <td>
                                                            @if( $result->remark == 0 )
                                                                <span class="badge badge-warning">Pending</span>
                                                            @elseif( $result->remark == 1 )
                                                                <span class="badge badge-success">Completed</span>
                                                            @endif
                                                        </td>
                                                        <td> {{ $result->updated_at }} </td>
                                                        <td>
                                                        @if( $result->remark == 0 )
                                                            <form method="post" role="form"  action=" {{ route('backoffice.update',$result->id) }} ">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="_method" value="PATCH">
                                                                <button type="submit" class="btn btn-info"><span class="fa fa-save"></span></button>
                                                            </form>
                                                        @elseif( $result->remark == 1 )
                                                            <button disabled class="btn btn-info"><span class="fa fa-save"></span></button>
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