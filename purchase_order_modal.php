<!-- Add-->

<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Purchase order</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="purchase_order_add.php"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="supplier" class="col-sm-3 control-label">Business Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier" id="supplier" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($brow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$brow['id']."'>".$brow['business_name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="supplier_product" class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier_product" id="supplier_product" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM supplier_product";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['supplier_product_name']."</option>
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
                                onchange="multiply()" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="total" class="col-sm-3 control-label">Grand Total</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="total" name="total" placeholder="0.00"
                                readonly>
                        </div>
                    </div>

                    <script>
                    function multiply() {
                        // var add_quantity = document.getElementById("add_quantity").value;
                        // var add_price = document.getElementById("add_price").value;
                        // var add_subtotal = add_quantity * add_price;
                        // document.getElementById("add_subtotal").value = add_subtotal;

                        // var subtotal = document.getElementById("add_subtotal").value;
                        // var amount = price * 0.12;
                        // document.getElementById("sales_tax").value = amount;

                        // var total_amount = (add_subtotal) - (amount);
                        // document.getElementById("total").value = total_amount;

                        var quantity = document.getElementById("add_quantity").value;
                        var price = document.getElementById("add_price").value;
                        var total = quantity * price;
                        document.getElementById("add_subtotal").value = total;

                        var tax = total * 0.12;
                        document.getElementById("sales_tax").value = tax;
                        var grand_total = total - tax;
                        document.getElementById("total").value = grand_total;
                    }
                    </script>
                    
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

                    <div class="form-group">
                        <label for="payment_terms" class="col-sm-3 control-label">Payment Terms</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="payment_terms" id="payment_terms" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM payment_terms";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['payment_methods']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>  

                    <div class="form-group">
                        <div class="col-sm-9">
                            <input  type="hidden" value="0" class="form-control" name="status" id="status"></input>
                        </div>
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
                <h4 class="modal-title"><b><span class="po_id"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="purchase_order_edit.php">
                    <input type="hidden" class="purchaseid" name="id">

                    <div class="form-group">
                        <label for="edit_supplier" class="col-sm-3 control-label">Business Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_supplier" name="supplier" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($brow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$brow['id']."'>".$brow['business_name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_supplier_product" class="col-sm-3 control-label">Product Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_supplier_product" name="supplier_product" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM supplier_product";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['supplier_product_name']."</option>
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

                    <div class="form-group">
                        <label for="edit_payment_terms" class="col-sm-3 control-label">Payment Terms</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="payment_terms" id="edit_payment_terms" >
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM payment_terms";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['payment_methods']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>  

                    <div class="form-group">
                        <label for="edit_status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="status" id="edit_status" >
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM status";
                                    $query = $conn->query($sql);
                                    while($prow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$prow['id']."'>".$prow['status_description']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>  

                </div>
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
                        <h2 id="del_purchase_order" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--view-->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card-body">
                <?php
                    $sql = "SELECT *, purchase_order.id FROM purchase_order LEFT JOIN supplier ON supplier.id=purchase_order.supplier_id LEFT JOIN supplier_product ON supplier_product.id=purchase_order.supplier_id LEFT JOIN admin ON admin.id=purchase_order.supplier_id";
                    $query = $conn->query($sql);
                    while($row1 = $query->fetch_assoc()){
                ?>
                <!-----------------PURCHASE ORDER------------------->
                <p class=" text-center lead m-4"><b>Puchase Order Details</b><span class="card-text"></span></p>
                <p class="col-sm-6 col-md-6 col-lg-6"><b>PO Number: </b><span
                        class="card-text"><?php echo $row1['purchase_order_id'];?> </span><br></p>
                <p class="col-sm-6 col-md-6 col-lg-6"><b>Status: </b><span
                        class="card-text"><?php echo $row1['status']; ?> </span><br><br></p>
                <p class="col-sm-6 col-md-6 col-lg-6"><b>Purchase Date: </b><span
                        class="card-text"><?php echo $row1['purchase_date']; ?> </span><br></p>
                <p class="col-sm-6 col-md-6 col-lg-8"><b>Expected Date: </b><span
                        class="card-text"><?php echo $row1['expected_date']; ?> </span><br></p>
                <p class="col-sm-6 col-md-6 col-lg-6"><b>Order by: </b><span
                        class="card-text"><?php echo $row1['firstname']; ?>&nbsp;<?php echo $row1['lastname']; ?>
                    </span><br><br></p>

                <p class="col-sm-6 col-md-6 col-lg-8 lead"><b>Supplier</b><span class="card-text"></span></p><br>
                <!-----------------SUPPLIER------------------->
                <p class="col-sm-6 col-md-6 col-lg-7"><b>Supplier Name: </b><span
                        class="card-text"><?php echo $row1['business_name']; ?> </span><br></p>
                <p class="col-sm-6 col-md-6 col-lg-7"><b>Store Destination: </b><span
                        class="card-text"><?php echo $row1['address']; ?> </span><br></p>

                <p class="col-sm-6 col-md-5 col-lg-6"><b>Address: </b><span
                        class="card-text"><?php echo $row1['address']; ?> </span><br></p>
                <p class="col-sm-6 col-md-5 col-lg-8"><b>Phone Number: </b><span
                        class="card-text"><?php echo $row1['phone_number']; ?> </span><br></p>
                <p class="col-sm-6 col-md-5 col-lg-6"><b>Email: </b><span
                        class="card-text"><?php echo $row1['email']; ?></span><br><br></p>

                <p class="col-sm-6 col-md-5 col-lg-8 lead"><b> Items </b><span class="card-text"></span><br></p>

                <div class="modal-footer">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Item Description</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Cost</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left"><?php echo $row1['supplier_product_description']?></td>
                                <td class="text-left"><?php echo $row1['quantity']?></td>
                                <td class="text-left"><?php echo $row1['price']?></td>
                                <td class="text-left"><?php echo $row1['total']?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <?php
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
<!--PDF-->
<div class="modal fade" id="pdf">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div><a href="purchase_order_generatepdf.php" target="iframe"></a>
                </div>
                <iframe src="purchase_order_generatepdf.php" height="800" width="865" name="iframe"></iframe>
            </div>
        </div>
    </div>
</div>