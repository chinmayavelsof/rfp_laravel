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
                                    <p>Create your admin account below</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-4">
                            {{-- Success & Error alerts --}}
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            {{-- Registration Form --}}
                            <form id="adminRegisterForm" class="form-horizontal" method="POST" action="{{ route('admin.register.submit') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="firstname">First Name <em>*</em></label>
                                    <input type="text" name="firstname" class="form-control" id="firstname"
                                           placeholder="Enter Firstname" value="{{ old('firstname') }}">
                                    @error('firstname')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="lastname">Last Name <em>*</em></label>
                                    <input type="text" name="lastname" class="form-control" id="lastname"
                                           placeholder="Enter Lastname" value="{{ old('lastname') }}">
                                    @error('lastname')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email <em>*</em></label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Enter Email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password <em>*</em></label>
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="Enter Password">
                                    @error('password')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password_confirmation">Confirm Password <em>*</em></label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                           id="password_confirmation" placeholder="Confirm Password">
                                    @error('password_confirmation')
                                        <div class="text-danger small mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                        Register
                                    </button>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="{{ route('vendor.register') }}" class="text-muted">
                                        <i class="mdi mdi-account-plus mr-1"></i> Register as Vendor
                                    </a>
                                </div>

                                <div class="mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">
                                        <i class="mdi mdi-lock mr-1"></i> Already Registered? Log In
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <p>&copy; Copyright <i class="mdi mdi-heart text-danger"></i> RFP System</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/admin_registration_form_validation.js') }}"></script>
@endsection
