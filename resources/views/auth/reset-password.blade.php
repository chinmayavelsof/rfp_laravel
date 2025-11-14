@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Reset your password</h5>
                            <p>Enter your new password below.</p>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-2">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">New Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter new password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
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
