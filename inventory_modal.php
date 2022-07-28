<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Deduction</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="deduction_add.php">
                    <div class="form-group">
                        <label for="product_id" class="col-sm-3 control-label">Product ID</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_id" name="product_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unit" class="col-sm-3 control-label">Unit</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="unit" name="unit" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="quantity" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="price" name="price" required>
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
                <h4 class="modal-title"><b>Update item</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inventory_edit.php">
                    <input type="hidden" class="invid" name="id">
                    <div class="form-group">
                        <label for="product_id" class="col-sm-3 control-label">Product ID</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_product_id" name="product_id" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="unit" class="col-sm-3 control-label">Unit</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_unit" name="unit" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_quantity" name="quantity" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="number" class="col-sm-3 control-label">Price</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_price" name="price" required>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flapull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flatname="edit"><i
                        class="fa fa-check-square-o"></i>
                    Update</button>
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
                <form class="form-horizontal" method="POST" action="inventory_delete.php">
                    <input type="hidden" class="invid" name="id">
                    <div class="text-center">
                        <p>DELETE ITEM</p>
                        <h2 id="del_invent" class="bold"></h2>
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