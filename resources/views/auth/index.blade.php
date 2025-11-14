@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Welcome to RFP System!</h5>
                                            <p>Sign in to continue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="p-2">
                                    {{-- Success & Error alerts --}}
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">{{ session('error') }}</div>
                                    @endif
                                    <form id="LoginForm" class="form-horizontal"  method="POST" action="{{ route('login.submit') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="{{ route('vendor.register') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Register as Vendor</a>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <div>
                                <p>&copy; Copyright <i class="mdi mdi-heart text-danger"></i> RFP System</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/login_form_validation.js') }}"></script>
@endsection