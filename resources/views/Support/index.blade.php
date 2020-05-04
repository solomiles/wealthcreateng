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
                        <h4 class="title">Support Center</h4>
                        <p class="category">Feel free to raise a support ticket anytime anyday</p>
                    </div><br><br>
                    
                    <!-- start of support interface main  code -->
                    
                    <div class="row">
                        <div class="col-md-6" style="margin-bottom: 25px;">
                            <button id="newButton" class="btn btn-info btn-fill"><span class="fa fa-plus"></span>New</button>
                        </div>
                        
                        <div id="newForm" style="display:none" class="col-md-12">
                            <div class="col-md-6">
                                <form method="post" action="{{ route('support.store') }}" role="form">
                                    {{ csrf_field() }}
                                    <!-- <input value="PATCH" name="_method" type="hidden" > -->
                                    
                                    <div class="form-group">
                                        <label for="issue-title" >Issue Title</label>

                                        <input placeholder="eg: Unable to request Harvest" class="form-control border-input" type="text" required name="title">
                                    </div>

                                    <div class="form-group">
                                        <label for="issue-description" >Issue Description</label>

                                        <textarea placeholder="Please tell us briefly about the issue" class="form-control border-input" type="text" required rows="5" name="description"></textarea>
                                    </div>

                                    <div class="form-group">
                                        

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><br><hr>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="fa fa-edit"></span>Open Tickets
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTables-example" class="table table-striped table-hover table-condensed" role="table">
                                            <thead style="font-size:16px">
                                                <th>S/N</th>
                                                <th>Ticket ID</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Remark</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                            </thead>
                                            <tbody>
                                            @if ($results->count())
                                            @for($i=1;$i>1;)
                                            @endfor
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>#{{ $result->ticket_id }}</td>
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
                                                            <a href=" {{ action('SupportController@edit',$result->id) }} "><button class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                        @elseif( $result->remark == 1 )
                                                            <button disabled class="btn btn-info"><span class="fa fa-pencil"></span></button>
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