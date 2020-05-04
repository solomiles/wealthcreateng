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
                            <button class="btn btn-info btn-fill"><span class="fa fa-pencil"></span>Edit</button>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="col-md-6">
                            
                            
                                <form method="post" action=" {{ route('support.update',$results->id) }} " role="form">
                                    {{ csrf_field() }}
                                    <input value="PATCH" name="_method" type="hidden" >
                                
                                       
                                        <div class="form-group">
                                            <label for="issue-title" >Issue Title</label>

                                            <input value=" {{ $results->title }} " placeholder="eg: Unable to request Harvest" class="form-control border-input" type="text" required name="title" >
                                        </div>

                                        <div class="form-group">
                                            <label for="issue-description" >Issue Description</label>

                                            <textarea value=" " placeholder="Please tell us briefly about the issue" class="form-control border-input" type="text" required rows="5" name="description">{{ $results->description }}</textarea>
                                        </div>
                                    

                                    <div class="form-group">
                                        

                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>
                                </form>
                            
                            
                            </div>
                        </div>
                    </div><br><hr>

                    

                    <!-- end of support interface main code -->
                </div>
            </div>
        </div>
    </div>
@endsection