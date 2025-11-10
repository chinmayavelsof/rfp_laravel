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
                                    <p>Regsiter as Vendor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="p-4">
                            <form class="form-horizontal" action="">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="firstname">First name<em>*</em></label>
                                            <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="lastname">Last Name<em>*</em></label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">Email<em>*</em></label>
                                            <input type="text" class="form-control" id="email" placeholder="Enter Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="password">Password<em>*</em></label>
                                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="password">Confirm Password<em>*</em></label>
                                            <input type="password" class="form-control" id="confirmpassword" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="revenue">Revenue (Last 3 Years in Lacks)<em>*</em></label>
                                            <input type="text" class="form-control" id="revenue" placeholder="Enter Revenue">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="noofemployees">No of Employees<em>*</em></label>
                                            <input type="text" class="form-control" id="noofemployees" placeholder="No of Employees">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="gstno">GST No<em>*</em></label>
                                            <input type="text" class="form-control" id="gstno" placeholder="Enter GST No">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="panno">PAN No<em>*</em></label>
                                            <input type="text" class="form-control" id="panno" placeholder="Enter PAN No">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="revenue">Phone No<em>*</em></label>
                                            <input type="text" class="form-control" id="revenue" placeholder="Enter Phone No">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 col-xl-6">
                                        <div class="form-group">
                                            <label for="Categories">Categories<em>*</em></label>
                                            <select class="form-control" multiple id="Categories" name="Categories">
                                                <option value="">All Categories</option>
                                                <option value="1">Software</option>
                                                <option value="2">Hardware</option>
                                                <option value="3">Office Furniture</option>
                                                <option value="4">Stationery</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="p-2 mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                                    </div>
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