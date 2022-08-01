<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="po_id"></span></b></h4>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" method="POST" action="purchase_order_edit.php">
                    <input type="hidden" class="purchaseid" name="id">

                    <div class="form-group">
                        <label for="edit_product_name" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_product_name" name="product_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_quantity" name="quantity" oninput="multiply()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_price" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_price" name="price" oninput="multiply()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_sub_total" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_sub_total" name="sub_total" onchange="multiply()" readonly >
                        </div>
                </div>
    
                    <div class="form-group">
                        <label for="edit_amount" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_amount" name="amount"onchange="multiply()" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_total_amount" class="col-sm-3 control-label">Total Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_total_amount" name="total_amount" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="edit_purchase_date" class="col-sm-3 control-label">Purchase Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="edit_purchase_date" name="purchase_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_expected_date" class="col-sm-3 control-label">Expected Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="edit_expected_date" name="expected_date">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>Update</button>
                        <script>
                                    function multiply() {
                                        var quantity = document.getElementById("edit_quantity").value;
                                        var price = document.getElementById("edit_price").value;
                                        var total = quantity * price;
                                       document.getElementById("edit_sub_total").value = total;

                                       var subtotal = document.getElementById("edit_sub_total").value;
                                       var amount_total = subtotal * 0.12;
                                       document.getElementById("edit_amount").value = amount_total;

                                       var all_total = (total) + (amount_total) ;
                                       document.getElementById("edit_total_amount").value = all_total;

                            }
                         </script>               
                </form>
                    </div>
            </div>
        </div>
    </div>
</div>