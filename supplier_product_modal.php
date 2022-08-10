<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Supplier Product</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="supplier_product_add.php">
                    <div class="form-group">
                      	<label for="productName" class="col-sm-3 control-label">Product Name</label>
                      	<div class="col-sm-9">
                        	<input type="text" class="form-control" id="productName" name="productName" required>
                      	</div>
                    </div>
                    <div class="form-group">
                      	<label for="productDesc" class="col-sm-3 control-label">Product Description</label>
                      	<div class="col-sm-9">
                          <textarea style="resize: none" class="form-control" name="productDesc" id="productDesc"></textarea>
                      	</div>
                    </div>
					<div class="form-group">
                        <label for="supplier" class="col-sm-3 control-label">Supplier</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier" id="supplier" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                    $sql = "SELECT * FROM supplier";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$row['id']."'>".$row['business_name']."</option>
                                        ";
                                    }
                                ?>
                            </select>
                        </div>
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

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="product_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="supplier_product_edit.php">
                <input type="hidden" class="product_id" name="id">
                
                <div class="form-group">
                    <label for="edit_productName" class="col-sm-3 control-label">Product Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_prodName" name="productName">
                    </div>
                </div>
                <div class="form-group">
                    <label for="prodDesc" class="col-sm-3 control-label">Product Description</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="edit_prodDesc" name="productDescription"></textarea>
                    </div>
                </div>
                <div class="form-group">
                        <label for="edit_supplier" class="col-sm-3 control-label">Supplier</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="supplier" id="edit_supplier" >
                                <option value="" selected>- Select -</option>
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
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
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
                <form class="form-horizontal" method="POST" action="supplier_product_delete.php">
                    <input type="hidden" class="product_id" name="id">
                    <div class="text-center">
                        <p>DELETE PRODUCT</p>
                        <h2 id="del_product" class="bold"></h2>
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
