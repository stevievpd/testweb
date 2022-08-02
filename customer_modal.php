<!-- View -->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>View Sales</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="employee_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="custid" class="col-sm-3 control-label">Customer ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="custid" name="custid" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="cust_firstname" class="col-sm-3 control-label">First Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="cust_firstname" name="cust_firstname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="cust_lastname" class="col-sm-3 control-label">Last Name</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="cust_lastname" name="cust_lastname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="sales_id" class="col-sm-3 control-label">Sales ID</label>

                  	<div class="col-sm-9">
                      <input type ="text" class="form-control" name="sales_id" id="sales_id"></input>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="employee_id" class="col-sm-3 control-label">Employee ID</label>

                  	<div class="col-sm-9">
                      <input type ="text" class="form-control" name="employee_id" id="employee_id"></input>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="item_id" class="col-sm-3 control-label">Product Code</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_id" name="item_id">
                    </div>
                </div>
                <div class="form-group">
                    <label for="item_description" class="col-sm-3 control-label">Description</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_description" name="item_description">
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="item_quantity" class="col-sm-3 control-label">Quantity</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_quantity" name="item_quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label for="item_unit" class="col-sm-3 control-label">Unit</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_unit" name="item_unit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="item_price" class="col-sm-3 control-label">Cost</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_price" name="item_price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="item_total" class="col-sm-3 control-label">Total</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="item_total" name="item_total">
                    </div>
                </div>
          	</div>
        </div>
    </div>
</div>