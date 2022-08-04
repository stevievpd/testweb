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
                        <label for="vendor_name" class="col-sm-3 control-label">Vendor Name</label>

                        <div class="col-sm-9">
                            <select class="form-control" name="vendor_name" id="vendor_name">
                                <option selected id="vendor_name"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$row['business_name']."'>".$row['business_name']."</option>
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
                                <option selected id="product_name"></option>
                                <?php
                                    $sql = "SELECT * FROM supplier_product";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$row['supProdDesc']."'>".$row['supProdDesc']."</option>
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
                        <label for="total" class="col-sm-3 control-label">Grand Total</label>

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

                    <?php include 'includes/scripts.php' ?>

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
                        <h2 id="del_purchase_order" class="bold"></h2>
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
                                        <option value='".$prow['business_name']."'>".$prow['business_name']."</option>
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
                                        <option value='".$prow['supProdDesc']."'>".$prow['supProdDesc']."</option>
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

                    <?php include 'includes/scripts.php' ?>

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

<!--view-->
<div class="modal fade" id="view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="po_id"></span></b></h4>
                <?php
                    $sql = "SELECT * FROM purchase_order ";
                    $query = $conn->query($sql);
                    while($row1 = $query->fetch_assoc()){
                    ?>
                <div class="card-body ">
                    <p class="text-center lead m-4 pb-5 bg-success" style=""><b>Purchase Order Details</b><span
                            class="card-text"></span></p>
                    <img src="images/growth.png" class="growth_logo">
                    <pre>
                        <b>Vendor Name: </b><span class="card-text" ><?php echo $row1['vendor_name']; ?> </span><br>
                        <b>Product Name: </b><span class="card-text"><?php echo $row1['product_name']; ?> </span><br>
                        <b>Quantity: </b><span class="card-text"><?php echo $row1['quantity']; ?> </span><br>
                        <b>Grand Total: </b><span class="card-text"><?php echo $row1['total']; ?> </span><br>
                        <b>Purchase Date: </b><span class="card-text"><?php echo $row1['purchase_date']; ?> </span><br>
                        <b>Expected Date: </b><span class="card-text"><?php echo $row1['expected_date']; ?> </span><br>
                        </pre>
                </div>
                <?php
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.growth_logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 190px;
    height: 120px;
}
</style>

<!--PDF-->
<div class="modal fade" id="pdf">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div><a href="purchase_order_generatepdf.php" target="iframe"></a>
                </div>
                <iframe src="purchase_order_generatepdf.php" height="800" width="870" name="iframe"></iframe>
            </div>
        </div>
    </div>
</div>