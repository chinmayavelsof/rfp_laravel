@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Forgot your password?</h5>
                            <p>Enter your registered email to receive a reset link.</p>
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

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block" type="submit">Send Reset Link</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="{{ route('login') }}" class="text-muted"><i class="mdi mdi-arrow-left mr-1"></i> Back to Login</a>
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
