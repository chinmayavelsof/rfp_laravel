 @extends('layouts.app')

 @section('title', 'Add RFP')

 @section('content')

 <div class="container-fluid">

     <!-- start page title -->
     <div class="row">
         <div class="col-12">
             <div class="page-title-box d-flex align-items-center justify-content-between">
                 <h4 class="mb-0 font-size-18">RFP Create</h4>

                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);">RFP</li></a></li>
                         <li class="breadcrumb-item active">RFP Create</li>
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
                                     <label for="ItemName">Item Name<em>*</em></label>
                                     <input type="text" class="form-control" id="ItemName" name="ItemName" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>

                             <div class="col-lg-4 col-md-4">
                                 <div class="form-group">
                                     <label for="description">Item Description<em>*</em></label>
                                     <input type="text" class="form-control" id="description" name="description" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>

                             <div class="col-lg-4 col-md-4">
                                 <div class="form-group">
                                     <label for="quantity">Quantity<em>*</em></label>
                                     <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <label for="LastDate">Last Date<em>*</em></label>
                                     <input type="date" class="form-control" id="LastDate" name="LastDate" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>

                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <label for="MinPrice">Minimum Price<em>*</em></label>
                                     <input type="number" class="form-control" id="MinPrice" name="MinPrice" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <label for="MaxPrice">Maximum Price<em>*</em></label>
                                     <input type="number" class="form-control" id="MaxPrice" name="MaxPrice" placeholder="" data-rule-mandatory="true">
                                 </div>
                             </div>

                             <div class="col-lg-6 col-md-6">
                                 <div class="form-group">
                                     <label for="Vendor">Vendor<em>*</em></label>
                                     <select class="form-control" multiple id="Vendors" name="Vendors">
                                        <option value="1">Chinmaya</option>
                                        <option value="2">Harsh</option>
                                        <option value="3">Bhanshu</option>
                                        <option value="4">Saurabh</option>
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