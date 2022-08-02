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
                <form class="form-horizontal" method="POST" action="purchase_order_add.php">
                    <div class="form-group">
                        <label for="add_vendor_name" class="col-sm-3 control-label">Vendor Name</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="vendor_name" id="vendor_name">
                                <option selected id="position_val"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['business_name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_name" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="product_name" id="product_name">
                                <option selected id="position_val"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier_product";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['supProdDesc']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="add_quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="add_quantity" name="quantity"
                                placeholder="0.00" oninput="multiply()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_price" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="add_price" name="price" placeholder="0.00"
                                oninput="multiply()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_subtotal" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="add_subtotal" name="subtotal"
                                placeholder="0.00" onchange="multiply()" require readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sales_tax" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="sales_tax" name="sales_tax" placeholder="0.00"
                                oninput="multiply()" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="total" class="col-sm-3 control-label">Total Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="total" name="total" placeholder="0.00"
                                readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="purchase_date" class="col-sm-3 control-label">Purchase Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="expected_date" class="col-sm-3 control-label">Expected Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="expected_date" name="expected_date" required>
                        </div>
                    </div>
                    <script>
                    function multiply() {
                        var add_quantity = document.getElementById("add_quantity").value;
                        var add_price = document.getElementById("add_price").value;
                        var add_subtotal = add_quantity * add_price;
                        document.getElementById("add_subtotal").value = add_subtotal;

                        var subtotal = document.getElementById("add_subtotal").value;
                        var amount = subtotal * 0.12;
                        document.getElementById("sales_tax").value = amount;

                        var total_amount = (add_subtotal) + (amount);
                        document.getElementById("total").value = total_amount;
                    }
                    </script>

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
                <form class="form-horizontal" method="POST" action="purchase_order_delete.php">
                    <input type="hidden" class="po_id" name="id">
                    <div class="text-center">
                        <p>DELETE PURCHASE ORDER </p>
                        <h2 id="purchase_order" class="bold"></h2>
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
                        <label for="add_vendor_name" class="col-sm-3 control-label">Vendor Name</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="vendor_name" id="edit_vendor_name">
                                <option selected name="vendor_name" id="edit_vendor_name"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['business_name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_product_name" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-9">
                        <select class="form-control" name="product_name" id="edit_product_name">
                                <option selected name="product_name" id="edit_product_name"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier_product";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['supProdDesc']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_quantity" name="quantity"
                                oninput="add()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_price" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_price" name="price" oninput="add()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_sub_total" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_sub_total" name="subtotal"
                                onchange="add()" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_sales_tax" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_sales_tax" name="sales_tax"
                                onchange="add()" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_total_amount" class="col-sm-3 control-label">Total Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_total_amount" name="total" readonly>
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
                    <script>
                    function add() {
                        var edit_quantity = document.getElementById("edit_quantity").value;
                        var edit_price = document.getElementById("edit_price").value;
                        var edit_subtotal = edit_quantity * edit_price;
                        document.getElementById("edit_sub_total").value = edit_subtotal;

                        var subtotal = document.getElementById("edit_sub_total").value;
                        var editamount = subtotal * 0.12;
                        document.getElementById("edit_sales_tax").value = editamount;

                        var edittotal_amount = (edit_subtotal) + (editamount);
                        document.getElementById("edit_total_amount").value = edittotal_amount;
                    }
                    </script>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i
                                class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- View-->

<div class="modal fade" id="view">
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
                            <input type="number" class="form-control" id="edit_quantity" name="quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_price" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_price" name="price" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_sub_total" class="col-sm-3 control-label">Subtotal</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_sub_total" name="subtotal">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_sales_tax" class="col-sm-3 control-label">Sales Tax</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_sales_tax" name="sales_tax">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_total_amount" class="col-sm-3 control-label">Total Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_total_amount" name="total">
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
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>