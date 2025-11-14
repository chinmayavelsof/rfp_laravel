@extends('layouts.auth')

@section('title','Register Vendor')

@section('content')
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-8">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome to RFP System!</h5>
                                    <p>Register as Vendor</p>
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
                            <form id="vendorRegisterForm" method="POST" action="{{ route('vendor.register.submit') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="firstname">First name<em>*</em></label>
                                        <input type="text" name="firstname" id="firstname" class="form-control"
                                               placeholder="Enter Firstname" value="{{ old('firstname') }}">
                                        @error('firstname') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="lastname">Last name<em>*</em></label>
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                               placeholder="Enter Lastname" value="{{ old('lastname') }}">
                                        @error('lastname') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <label for="email">Email<em>*</em></label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="Enter Email" value="{{ old('email') }}">
                                        @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="password">Password<em>*</em></label>
                                        <input type="password" name="password" id="password" class="form-control"
                                               placeholder="Enter Password">
                                        @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="password_confirmation">Confirm Password<em>*</em></label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               class="form-control" placeholder="Confirm Password">
                                        @error('password_confirmation') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="revenue">Revenue (Last 3 Years in Lacs)<em>*</em></label>
                                        <input type="text" name="revenue" id="revenue" class="form-control"
                                               placeholder="Enter Revenue" value="{{ old('revenue') }}">
                                        @error('revenue') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="noofemployees">No of Employees<em>*</em></label>
                                        <input type="text" name="noofemployees" id="noofemployees" class="form-control"
                                               placeholder="Enter No of Employees" value="{{ old('noofemployees') }}">
                                        @error('noofemployees') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="gstno">GST No<em>*</em></label>
                                        <input type="text" name="gstno" id="gstno" class="form-control"
                                               placeholder="Enter GST No" value="{{ old('gstno') }}">
                                        @error('gstno') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="panno">PAN No<em>*</em></label>
                                        <input type="text" name="panno" id="panno" class="form-control"
                                               placeholder="Enter PAN No" value="{{ old('panno') }}">
                                        @error('panno') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="phoneno">Phone No<em>*</em></label>
                                        <input type="text" name="phoneno" id="phoneno" class="form-control"
                                               placeholder="Enter Phone No" value="{{ old('phoneno') }}">
                                        @error('phoneno') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-6 mt-3">
                                        <label for="categories">Categories<em>*</em></label>
                                        <select name="categories[]" id="categories" multiple class="form-control">
                                            <option value="1">Software</option>
                                            <option value="2">Hardware</option>
                                            <option value="3">Office Furniture</option>
                                            <option value="4">Stationery</option>
                                        </select>
                                        @error('categories') <div class="text-danger small">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="col-md-12 mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
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
    <script src="{{ asset('assets/js/vendor_registration_form_validation.js') }}"></script>
@endsection
