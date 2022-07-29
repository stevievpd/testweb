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
                        <label for="product_name" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>
                </div> 
                <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="0.00" oninput="multiply()" required>
                        </div>
                </div>
                <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Unit Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price"  placeholder="0.00" oninput="multiply()"required>
                        </div>
                </div>
                <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount" readonly>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i>Save</button>
                    <script>
                            function multiply() {
                                var quantity = document.getElementById("quantity").value;
                                var price = document.getElementById("price").value;
                                var total = parseFloat(quantity) * parseFloat(price);
                                document.getElementById("amount").value = total;
                            }
                    </script>
                </form>
                </div>
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
                <form class="form-horizontal" method="POST" action="purchase_order_edit.php">
                    <input type="hidden" class="purchaseid" name="id">
                    <div class="form-group">
                        <label for="product_name" class="col-sm-3 control-label">Product Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_name" name="product_name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="0.00" oninput="multiply()" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Unit Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price"  placeholder="0.00" oninput="multiply()"required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="amount" class="col-sm-3 control-label">Amount</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="amount" name="amount" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="purchase_date" class="col-sm-3 control-label">Purchase Date</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="purchase_date" name="purchase_date" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="expected_date" class="col-sm-3 control-label">Expected Date</label>

                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="expected_date" name="expected_date" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>Update</button>
                        <script>
                                    function multiply() {
                                        var quantity = document.getElementById("quantity").value;
                                        var price = document.getElementById("price").value;
                                        var total = parseFloat(quantity) * parseFloat(price);
                                        document.getElementById("amount").value = total;
                                    }
                        </script>       
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
                <form class="form-horizontal" method="POST" action="supplier_delete.php">
                    <input type="hidden" class="supid" name="id">
                    <div class="text-center">
                        <p>DELETE SUPPLIER</p>
                        <h2 id="del_deduction" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function multiply() {
        var quantity = document.getElementById("quantity").value;
        var price = document.getElementById("price").value;
        var total = parseFloat(quantity) * parseFloat(price);
        document.getElementById("amount").value = total;
    }
    </script>