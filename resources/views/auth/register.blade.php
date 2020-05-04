
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register')}}</div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}



                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone-number" class="col-md-4 col-form-label text-md-right">Phone number</label>

                            <div class="col-md-6">
                                <input id="phone-number" required type="text" class="form-control" name="phone" >

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row ">
                                <label for="referrer-code" class="col-md-4 col-form-label text-md-right">Referrer Code</label>

                                <div class="col-md-6">
                                    <input id="referrer" value="{{ 'referrer' }}" type="text" class="form-control" readonly name="referrer" >


                                </div>
                            </div>


                        <hr>
                        <u style="padding: 0 100px 0">Please enter your bank details</u>
                        <br><br>

                        <div class="form-group row ">
                            <label for="bank_name" class="col-md-4 col-form-label text-md-right">Select Name of bank</label>

                            <div class="col-md-6">
                              <select name="bank_name" class="form-control" required>
                                <option value="Access Bank">Access Bank</option>
                                <option value="Citibank">Citibank</option>
                                <option value="Diamond Bank">Diamond Bank</option>
                                <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                <option value="Fidelity Bank Nigeria">Fidelity Bank Nigeria</option>
                                <option value="First Bank of Nigeria">First Bank of Nigeria</option>
                                <option value="First City Monument Bank">First City Monument Bank</option>
                                <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                <option value="Heritage Bank Plc">Heritage Bank Plc</option>
                                <option value="Keystone Bank Limited">Keystone Bank Limited</option>
                                <option value="JAIZ Bank">JAIZ Bank</option>
                                <option value="Skye Bank">Skye Bank</option>
                                <option value="Stanbic IBTC Bank Nigeria Limited">Stanbic IBTC Bank Nigeria Limited</option>
                                <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                <option value="Sterling Bank">Sterling Bank</option>
                                <option value="Union Bank of Nigeria">Union Bank of Nigeria</option>
                                <option value="United Bank for Africa">United Bank for Africa</option>
                                <option value="Unity Bank Plc">Unity Bank Plc</option>
                                <option value="Wema Bank">Wema Bank</option>
                                <option value="Zenith Bank">Zenith Bank</option>
                              </select>
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('account_name') ? ' has-error' : '' }}">
                            <label for="account_name" class="col-md-4 col-form-label text-md-right">Bank Account Name</label>

                            <div class="col-md-6">
                              <input id="account_name" required type="text" class="form-control" name="account_name" >

                               @if ($errors->has('account_name'))
                                <span class="help-block">
                                    <strong style="color:red;">{{ $errors->first('account_name') }}</strong>
                                </span>
                              @endif
                            </div>
                        </div>

                        <div class="form-group row {{ $errors->has('account_number') ? ' has-error' : '' }}">
                            <label for="account_number" class="col-md-4 col-form-label text-md-right">Bank Account Number</label>

                            <div class="col-md-6">
                              <input id="account_number" required type="text" class="form-control" name="account_number" >

                              @if ($errors->has('account_number'))
                                <span class="help-block">
                                    <strong style="color:red;">{{ $errors->first('account_number') }}</strong>
                                </span>
                              @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 ">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
