<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Purchase Order</b></h4>
            </div>
    
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="purchase_order.php">

                    <div class="form-group">
                        <label for="business_name" class="col-sm-3 control-label">Business Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="business_name" name="business_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-sm-3 control-label">City</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip_company" class="col-sm-3 control-label">Zip</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="zip_company" name="zip_company" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone_number1" class="col-sm-3 control-label">Phone Number</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number1" name="phone_number1" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="op_number" class="col-sm-3 control-label">PO Number</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="op_date" class="col-sm-3 control-label">PO Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="po_number" name="po_number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vendor_id" class="col-sm-3 control-label">Vendor ID</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vendor_id" name="vendor_id" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip_po" class="col-sm-3 control-label">Zip</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="zip_po" name="zip_po" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone_number2" class="col-sm-3 control-label">Phone Number</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number2" name="phone_number2" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="shipping_method" class="col-sm-3 control-label">Shipping Method</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shipping_method" name="shipping_method" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="payment_term" class="col-sm-3 control-label">Payment Terms</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="payment_term" name="payment_term" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="shipping_method" class="col-sm-3 control-label">Required By Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="required_date" name="required_date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment_terms" class="col-sm-3 control-label">Item Description</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="item_description" name="iteem_description" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="qauntity" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Unit Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="received" class="col-sm-3 control-label">Received by:</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="received" name="received" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subtotal" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="subtotal" name="subtotal" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="freight" class="col-sm-3 control-label">Freight</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="freight" name="freight" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="sales_tax" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="sales_tax" name="sales_tax" required>
                        </div>
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                    class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>
                    Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Update PO</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inventory_edit.php">
                    <input type="hidden" class="purchaseid" name="id">
                    <div class="form-group">
                        <label for="business_name" class="col-sm-3 control-label">Business Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="business_name" name="business_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="city" class="col-sm-3 control-label">City</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip_company" class="col-sm-3 control-label">Zip</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="zip_company" name="zip_company" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone_number1" class="col-sm-3 control-label">Phone Number</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number1" name="phone_number1" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="op_number" class="col-sm-3 control-label">PO Number</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="po_number" name="po_number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="op_date" class="col-sm-3 control-label">PO Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="po_number" name="po_number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="vendor_id" class="col-sm-3 control-label">Vendor ID</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="vendor_id" name="vendor_id" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="zip_po" class="col-sm-3 control-label">Zip</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="zip_po" name="zip_po" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone_number2" class="col-sm-3 control-label">Phone Number</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number2" name="phone_number2" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="shipping_method" class="col-sm-3 control-label">Shipping Method</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shipping_method" name="shipping_method" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="payment_term" class="col-sm-3 control-label">Payment Terms</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="payment_term" name="payment_term" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="shipping_method" class="col-sm-3 control-label">Required By Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="required_date" name="required_date" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment_terms" class="col-sm-3 control-label">Item Description</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="item_description" name="iteem_description" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="qauntity" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Unit Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="received" class="col-sm-3 control-label">Received by:</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="received" name="received" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subtotal" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="subtotal" name="subtotal" required>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="freight" class="col-sm-3 control-label">Freight</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="freight" name="freight" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="sales_tax" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="sales_tax" name="sales_tax" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i
                                class="fa fa-check-square-o"></i>
                            Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="supplier_delete.php">
                    <input type="hidden" class="supid" name="id">
                    <div class="text-center">
                        <p>DELETE SUPPLIER</p>
                        <h2 id="del_deduction" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>