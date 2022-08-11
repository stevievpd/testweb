<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Item to Inventory</b></h4>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inventory_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>
                            <div class="col-sm-9">
                              <input type="file" name="photo" id="photo">
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="position" class="col-sm-3 control-label">Product</label>

                        <div class="col-sm-9">
                            <select class="form-control" id="product_id" name="productID"required>
                            <option value="" selected>- Select -</option>
                            <?php
                                $sql = "SELECT * FROM supplier_product";
                                $query = $conn->query($sql);
                                while($prow = $query->fetch_assoc()){
                                    echo "
                                    <option value='".$prow['supplier_product_id']."'>".$prow['supplier_product_name']."</option>
                                    ";
                                }
                            ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="₱ 0.00" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cost" class="col-sm-3 control-label">Buying Cost</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="cost" name="cost"  placeholder="₱ 0.00" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Selling Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="price" name="price"  placeholder="₱ 0.00" required>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
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
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="inventory_id"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inventory_edit.php">
                    <input type="hidden" class="invid" name="id">
                    <div class="form-group">
                        <label for="edit_description" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_description" name="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_quantity" class="col-sm-3 control-label">Quantity</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_quantity" name="quantity"  placeholder="₱ 0.00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_cost" class="col-sm-3 control-label">Unit Cost</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_cost" name="cost" placeholder="₱ 0.00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_price" class="col-sm-3 control-label">Unit Price</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="edit_price" name="price" placeholder="₱ 0.00">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>Update</button>
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
                <form class="form-horizontal" method="POST" action="inventory_delete.php">
                    <input type="hidden" class="invid" name="id">
                    <div class="text-center">
                        <p>DELETE INVENTORY</p>
                        <h2 id="del_inventory" class="bold"></h2>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Edit Photo-->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="edit_inventory"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="inventory_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="invid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>
                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    
