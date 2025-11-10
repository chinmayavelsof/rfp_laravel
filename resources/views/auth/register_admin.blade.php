@extends('layouts.auth')

@section('title', 'Register Admin')

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
                            <form class="form-horizontal" action="index.html">

                                <div class="form-group">
                                    <label for="firstname">First name<em>*</em></label>
                                    <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name<em>*</em></label>
                                    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname">
                                </div>

                                <div class="form-group">
                                    <label for="username">Email<em>*</em></label>
                                    <input type="text" class="form-control" id="email" placeholder="Enter Email">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password<em>*</em></label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                </div>

                                <div class="form-group">
                                    <label for="password">Confirm Password<em>*</em></label>
                                    <input type="password" class="form-control" id="confirmpassword" placeholder="Enter Confirm Password">
                                </div>


                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="{{ route('vendor.register') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Register as Vendor</a>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Already Registered? Log In</a>
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