<?php
// header 
require_once "../../assets/layout/header.php";
?>

<!-- main container of item page -->
<div class="container-fluid">
     <div class="row mt-5">
          <!-- left column -->
          <div class="col-6">
               <!-- card of left column -->
               <div class="card">
                    <div class="card-header">
                         <div class="card-title text-center">
                              <h5>Add/Edit Items</h5>
                         </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                         <form action="" class="form" method="POST">

                              <!-- item name -->
                              <div class="row mt-2 d-flex align-items-center justify-content-center">
                                   <div class="col-2">
                                        <label class="form-label fw-bold" for="item-name">Name</label>
                                   </div>
                                   <div class="col-6">
                                        <input type="text" class="form-control rounded-3" id="itemName">
                                   </div>
                              </div>
                              <!-- end of item name -->

                              <!-- UOM -->
                              <div class=" row mt-4 d-flex align-items-center justify-content-center">
                                   <div class="col-2">
                                        <label class="fw-bold form-label" for="">UOM</label>
                                   </div>
                                   <div class="col-6">
                                        <select name="uom" id="UOMDropDown" class="form-select rounded-3">
                                             <option value="#" selected disabled>select UOM</option>
                                             <option value="">unit</option>
                                             <option value="">cm</option>
                                             <option value="">mm</option>
                                             <option value="">kg</option>
                                        </select>
                                   </div>
                              </div>
                              <!-- end of UOM -->

                              <!-- no of units -->
                              <div class=" row mt-4 d-flex align-items-center justify-content-center">
                                   <div class="col-2">
                                        <label class="fw-bold form-label" for="">Units</label>
                                   </div>
                                   <div class="col-6">
                                        <input type="number" class="form-control rounded-3" id="units" min="1" id="itemUnits">
                                   </div>

                              </div>
                              <!--end of no of units -->

                              <!-- unit price -->
                              <div class=" row mt-4 d-flex align-items-center justify-content-center">
                                   <div class="col-2">
                                        <label class="fw-bold form-label" for="">Unit Price</label>
                                   </div>
                                   <div class="col-6">
                                        <input type="number" class="form-control rounded-3" id="unitPrice" id="itemUnitPrice">
                                   </div>
                              </div>
                              <!-- end of unit price -->

                              <!-- button set -->
                              <div class="row mt-4 justify-content-end">
                                   <button class="btn btn-success w-auto mx-2" id="btnSave">Save</button>
                                   <button class="btn btn-secondary w-auto mx-2" id="btnClear">Clear</button>
                              </div>
                              <!-- end of button set -->

                         </form>
                    </div>
                    <!-- end of card body -->
               </div>
               <!-- end of card -->
          </div>
          <!-- end of left column -->

          <!-- right column -->
          <div class="col-6">
               <!-- card of right column -->
               <div class="card">
                    <div class="card-header">
                         <div class="card-title text-center">
                              <h5>Inventory</h5>
                         </div>
                    </div>
                    <div class="card-body">
                         <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover" id="tbl-items">
                                   <thead class="text-center">
                                        <tr>
                                             <th>Name</th>
                                             <th>UOM</th>
                                             <th>Quantity</th>
                                             <th>Unit Price</th>
                                             <th>Action</th>
                                        </tr>
                                   </thead>
                                   <tbody class="tbl-items">
                                        <tr class="text-center">
                                             <td>Books</td>
                                             <td>unit</td>
                                             <td>12</td>
                                             <td>120.00</td>
                                             <td>
                                                  <button class="btn btn-primary btnEdit">Edit</button>
                                                  <button class="btn btn-danger btnDelete">Delete</button>
                                             </td>
                                        </tr>
                                        <tr class="text-center">
                                             <td>Pens</td>
                                             <td>unit</td>
                                             <td>20</td>
                                             <td>12.00</td>
                                             <td>
                                                  <button class="btn btn-primary btnEdit">Edit</button>
                                                  <button class="btn btn-danger btnDelete">Delete</button>
                                             </td>
                                        </tr>
                                   </tbody>
                              </table>
                         </div> 
                    </div>
               </div>
               <!-- end of card of right column -->
          </div>
          <!-- end of right column -->
     </div>
</div>
<!-- end of main container -->

<?php
// footer 
require_once "../../assets/layout/footer.php";
?>