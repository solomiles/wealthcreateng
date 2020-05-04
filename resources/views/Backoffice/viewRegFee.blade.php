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
                        <h4 class="title">Registration Fee Images</h4>
                        <p class="category">List of all WealthCreateNG members that have uploaded</p>
                    </div><br><br>
                    
                    <!-- start of support interface main  code -->
                    
                    <hr>

                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <span class="fa fa-edit"></span>All Members upload
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="dataTables-example" class="table table-striped table-hover table-condensed" role="table">
                                            <thead style="font-size:16px">
                                                <th>s/n</th>
                                                <th>User ID</th>
                                                <th>Date</th>
                                                <th>View Image</th>
                                                
                                            </thead>
                                            <tbody>
                                            @if ($results->count())
                                            @for($i=1;$i>1;)
                                            @endfor
                                                @foreach($results as $result)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $result->user_id }}</td>
                                                        
                                                        
                                                        
                                                        <td> {{ $result->created_at }} </td>
                                                        <td>
                                                    
                                                                <a href="{{ asset('storage/'.$result->filename.'/'.$result->filename) }}" target="_blank"> <button type="button" class="btn btn-info"><span class="fa fa-file"></span></button></a>
                                                            
                                                        
                                                        </td>
                                                        
                                                    </tr>
                                                @endforeach
                                            @endif
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                        </div>
                    </div>

                    <!-- end of support interface main code -->
                </div>
            </div>
        </div>
    </div>
@endsection