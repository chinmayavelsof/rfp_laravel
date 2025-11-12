 @extends('layouts.app')

 @section('title', 'Add Category')

 @section('content')

 <div class="container-fluid">

     <!-- start page title -->
     <div class="row">
         <div class="col-12">
             <div class="page-title-box d-flex align-items-center justify-content-between">
                 <h4 class="mb-0 font-size-18">Category Create</h4>

                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</li></a></li>
                         <li class="breadcrumb-item active">Category Create</li>
                     </ol>
                 </div>

             </div>
         </div>
     </div>
     <!-- end page title -->

     <!-- end row -->


     <div class="row">
         <div class="col-lg-12">
             <div class="card">
                 <div class="card-body">
                     <form class="validateJs">
                         <div class="row">
                             <div class="col-lg-4 col-md-4">
                                 <div class="form-group">
                                     <label for="CategoryName">Category Name<em>*</em></label>
                                     <input type="text" class="form-control" id="CategoryName" name="CategoryName" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>

                             <div class="col-lg-4 col-md-4">
                                 <div class="form-group">
                                     <label for="CategoryStatus">Category Status<em>*</em></label>
                                     <select class="form-control" id="CategoryStatus" name="CategoryStatus">
                                     <option value="">Select Status</option>
                                     <option value="1">Active</option>
                                     <option value="2">Inactive</option>
                                 </select>
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-12 col-md-12 mt-4 text-right">
                                 <button type="submit" class="btn btn-primary mb-2 mt-1">Submit</button>
                                 <button type="button" class="btn btn-secondary ml-2 mb-2 mt-1">Cancel</button>
                             </div>
                         </div>

                     </form>
                 </div>
             </div>
         </div>
     </div>



     <!-- end row -->

 </div> <!-- container-fluid -->
 @endsection