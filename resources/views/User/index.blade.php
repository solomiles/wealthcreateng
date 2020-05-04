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
                        <h4 class="title">User Profile</h4>
                        <p class="category">Edit your phone number, account name and number for ease in payments</p>
                        <small style="color:red"> Only input fields in red can be edited</small>
                    </div>
                    
                    <!-- start of edit profile code -->
                    <form method="post" role="form"  action="{{ route('user.update',auth::user()->id) }}">    
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <!-- <div class="col-md-5">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control border-input" disabled placeholder="Username"  value="">
                                </div>
                            </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" disabled class="form-control border-input" placeholder="Fullname" value=" {{ Auth::user()->name}} ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" disabled class="form-control border-input" placeholder="Email" value=" {{ auth::user()->email }} ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" class="form-control border-input" name="phone" placeholder="Phone number" value=" {{ auth::user()->phone }} ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date Registered</label>
                                    <input type="text" class="form-control border-input" placeholder="2017-02-26" value=" {{ Auth::user()->created_at }} " disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Referrer Link</label>
                                    <input type="text" class="form-control border-input" placeholder="Referrer link" value="{{ url('register?referrer='.Auth::user()->code ) }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Account name</label>
                                    <input type="text"  class="form-control border-input" placeholder="Bank Account Name" value=" {{ auth::user()->account_name }} " name="account_name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text"  class="form-control border-input" placeholder="Account Number" value=" {{ auth::user()->account_number }} " name="account_number" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text"  class="form-control border-input" placeholder="Bank Name" value=" {{ auth::user()->bank_name }} " name="bank_name" >
                                </div>
                            </div>
                        </div>
                            
                        <div class="text-center">
                            <a href="{{ url('dashboard')}}" style="margin-bottom:10px" class="btn btn-default btn-fill btn-wd">Back</a>
                            <button type="submit" style="margin-bottom:10px" class="btn btn-success btn-fill btn-wd">Update</button>
                        </div>
                    <div class='clearfix'></div>
                            
                    </form>
                    <!-- end of edit profile code  -->

                </div>
            </div>
        </div>
    </div>
    <!-- end of main page -->
   

@endsection