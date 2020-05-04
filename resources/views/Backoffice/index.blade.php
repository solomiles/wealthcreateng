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
                        <h4 class="title">Admin Back Office</h4>
                        <p class="category">Ensure you have an understanding of how this interface works</p>
                    </div>
                    
                    <!-- start of admin interface main  code -->
                    <!-- <h3><strong class="alert-warning">Important Notice!!!</strong></h3> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                
                                <div class="panel panel-primary">
                                    <div class="panel-heading"> Provide Help Table</div>
                                    <div class="panel-body">
                                        <div class="table-responsive" >
                                            <table id="dataTables-example" class="table table-condensed table-hover table-striped">
                                                <thead>
                                                    <th>S/N</th>
                                                    <th>User ID</th>
                                                    <th>PH Amount</th>
                                                    <th>PH ID</th>
                                                    <th>Matched ID</th>
                                                    <th>Remarks</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </thead>

                                                <tbody>
                                                @if( $provide_helps->count() )
                                                @for($i=1; $i>1;)
                                                @endfor
                                                    @foreach($provide_helps as $result)
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $result->user_id }}</td>
                                                                <form method="POST" action="{{ route('invest.update', $result->id ) }}"  role="form">
                                                            <td>
                                                            @if( $result->ph_confirmed == 0 )
                                                                <div class="id">
                                                                    <input class="form-control border-input" name="ph_amount" type="text" value="{{ $result->ph_amount }}">
                                                                </div>
                                                            @elseif( $result->ph_confirmed == 1 )
                                                                <div class="id">
                                                                    <input class="form-control border-input" disabled type="text" value="{{ $result->ph_amount }}">
                                                                </div>
                                                            @endif
                                                            </td>
                                                            <td>{{ $result->ph_id }}</td>
                                                            <td>
                                                                
                                                                    
                                                                    {{ csrf_field() }}
                                                                    <input name="_method" type="hidden" value="PATCH">

                                                                    @if( $result->ph_confirmed == 0 )
                                                                        <div class="id">
                                                                            <input class="form-control border-input" name="ph_match" type="text" value="{{ $result->ph_matched }}">
                                                                        </div>
                                                                    @elseif( $result->ph_confirmed == 1 )
                                                                    
                                                                        <div class="id">
                                                                            <input class="form-control border-input" disabled name="ph_match" type="text" value="{{ $result->ph_matched }}">
                                                                        </div>
                                                                    @endif
                                                                
                                                            </td>
                                                            <td>
                                                                @if( $result->ph_confirmed == 0 )
                                                                    <span class="badge badge-warning">Pending</span>
                                                                @elseif( $result->ph_confirmed == 1 )
                                                                    <span class="badge badge-success">Completed</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                
                                                                @if( $result->ph_confirmed == 0 )
                                                                
                                                                    <button type="submit"  class="btn btn-primary"  ><span class="fa fa-save" > </span></button>
                                                                @elseif( $result->ph_confirmed == 1 )
                                                                    <button type="submit" disabled class="btn btn-primary"  ><span class="fa fa-save" > </span></button>
                                                                @endif
                                                               </form>
                                                                <td>
                                                                <form action="{{action('ProvideHelpController@destroy', $result->id )}}" method="post">

                                                                    {{csrf_field()}}
                                                                    @if( $result->ph_confirmed == 0 )
                                                                        <input name="_method" type="hidden" value="DELETE">

                                                                        <button type="submit" class="btn btn-danger"  ><span class=" fa fa-trash" ></span></button>
                                                                    @elseif( $result->ph_confirmed == 1 )
                                                                        

                                                                        <button type="submit" disabled class="btn btn-danger"  ><span class=" fa fa-trash" ></span></button>
                                                                    @endif
                                                                </form>
                                                                
                                                                 </td>   
                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                
                                                @endif

                                                    
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end of provide help table -->

                            <div class="col-md-4">
                                <div class="row">
                                    <div class="well">
                                        <h5>Generate Matched ID</h5><br>
                                        
                                        <div class="form-group">
                                            <input type="text" id="random" class="form-control border-input" eadonly >
                                        </div><br>
                                        <div class="form-group">
                                            <input type="button" onClick="generate()" value="Generate" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="well">
                                        
                                        <h5>
                                            <button class= "btn btn-md btn-info btn-fill" >
                                                <span class=" fa fa-plus" >Add</span>
                                            </button> 
                                            Create New Provide Help
                                        </h5><br>
                                        
                                        
                                        <form role="form" method="post" action="{{ URL::to('adminsaveph') }}">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>User ID</label>
                                                        <input class="form-control border-input" name="user_id" required placeholder="User ID" type="text" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('ph_amount') ? 'has-error' : '' }}">
                                                        <label>Amount</label>
                                                        
                                                        <input class="form-control border-input" name="ph_amount" required placeholder=" Amount" type="text" >
                                                    @if($errors->has('ph_amount'))
                                                        <span>
                                                            <strong style="color:red" >{{$errors->first('ph_amount')}}</strong>
                                                        </span>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>PH ID</label>
                                                        <input class="form-control border-input" required placeholder="PH ID" type="text" >
                                                    </div>
                                                </div> -->

                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Matched ID</label>
                                                        <input class="form-control border-input" required placeholder="Matched ID" type="text" >
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="form-group text-center">
                                                    <input type="submit" class="btn btn-success btn-fill btn-wd" value="Save" >
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-8">
                                
                                <div class="panel panel-primary">
                                    <div class="panel-heading"> Get Help Table</div>
                                    <div class="panel-body">
                                        <div class="table-responsive" >
                                            <table id="dataTables-example3" class="table table-condensed table-hover table-striped">
                                                <thead>
                                                    <th>S/N</th>
                                                    <th>User ID</th>
                                                    <th>GH Amount</th>
                                                    <th>GH ID</th>
                                                    <th>Matched ID</th>
                                                    <th>Confirmed</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </thead>

                                                <tbody>
                                                
                                                @if( count($get_helps) > 0 )
                                                @for($i=1; $i>1;)
                                                @endfor
                                                    
                                                    @foreach($get_helps as $result )
                                                    
                                                        <tr>
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $result->user_id }}</td>
                                                            <td>
                                                            <form method="POST" action="{{ route('harvest.update', $result->id ) }}"  role="form">
                                                            @if( $result->gh_confirmed == 0 )
                                                                <div class="id">
                                                                    <input class="form-control border-input" name="gh_amount" type="text" value="{{ $result->gh_amount }}">
                                                                </div>
                                                            @elseif( $result->gh_confirmed == 1 )
                                                                <div class="id">
                                                                    <input class="form-control border-input" disabled type="text" value="{{ $result->gh_amount }}">
                                                                </div>
                                                            @endif
                                                            </td>
                                                            <td>{{ $result->gh_id }}</td>
                                                            <td>
                                                           
                                                                
                                                                {{ csrf_field() }}
                                                                    <input name="_method" type="hidden" value="PATCH">
                                                                @if( $result->gh_confirmed == 0 )
                                                                    <div class="id">
                                                                        <input class="form-control border-input" name="gh_match" type="text" value="{{ $result->gh_matched }}">
                                                                    </div>
                                                                @elseif( $result->gh_confirmed == 1 )
                                                                
                                                                    <div class="id">
                                                                        <input class="form-control border-input" disabled type="text" value="{{ $result->gh_matched }}">
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if( $result->gh_confirmed == 0 )
                                                                    <span class="badge badge-warning">Pending</span>
                                                                @elseif( $result->gh_confirmed == 1 )
                                                                    <span class="badge badge-success">Completed</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if( $result->gh_confirmed == 0 )
                                                                
                                                                    <button type="submit"  class="btn btn-primary"  ><span class="fa fa-save" > </span></button>
                                                                @elseif( $result->gh_confirmed == 1 )
                                                                    <button type="submit" disabled class="btn btn-primary"  ><span class="fa fa-save" > </span></button>
                                                                @endif
                                                                
                                                                </form>
                                                                <td>
                                                                    <form action="{{action('GetHelpController@destroy', $result->id )}}" method="post">

                                                                        {{csrf_field()}}
                                                                        @if( $result->gh_confirmed == 0 )
                                                                            <input name="_method" type="hidden" value="DELETE">

                                                                            <button type="submit" class="btn btn-danger"  ><span class=" fa fa-trash" ></span></button>
                                                                        @elseif( $result->gh_confirmed == 1 )
                                                                            

                                                                            <button type="submit" disabled class="btn btn-danger"  ><span class=" fa fa-trash" ></span></button>
                                                                        @endif
                                                                    </form>
                                                                
                                                                </td>   
                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                
                                                @endif

                                    
                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end of provide help table -->
                            <div class="col-md-4">
                                
                                <div class="row">
                                    <div class="well">
                                        
                                        <h5>
                                            <button class= "btn btn-md btn-info btn-fill" >
                                                <span class=" fa fa-plus" >Add</span>
                                            </button> 
                                            Create New Get Help
                                        </h5><br>
                                        
                                        
                                        <form method="post" role="form" action=" {{ URL::to('adminsavegh') }} ">
                                            {{csrf_field()}}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>User ID</label>
                                                        <input class="form-control border-input" name="user_id" required placeholder="User ID" type="text" >
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('gh_amount') ? 'has-error' : '' }} ">
                                                        <label>Amount</label>
                                                        <input class="form-control border-input" name="gh_amount" required placeholder=" Amount" type="text" >
                                                        @if($errors->has('gh_amount'))
                                                            <span>
                                                                <strong style="color:red">{{ $errors->first('gh_amount') }} </strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>PH ID</label>
                                                        <input class="form-control border-input" required placeholder="PH ID" type="text" >
                                                    </div>
                                                </div> -->

                                                <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Matched ID</label>
                                                        <input class="form-control border-input" required placeholder="Matched ID" type="text" >
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="row">
                                                <div class="form-group text-center">
                                                    <input type="submit" class="btn btn-success btn-fill btn-wd" value="Save" >
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            
                  
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
                                        <!-- <button type="submit" style="margin-bottom:10px"  class="btn btn-success btn-fill btn-wd">Confirm Payment</button> -->
                                    </div>
                                </div>
                    

                            <div class='clearfix'></div>
                                

                        </div>
                    </div>
                    
                    <!-- end of admin interface main code  -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
@endsection