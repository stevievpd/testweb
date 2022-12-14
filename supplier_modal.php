
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Supplier</b></h4>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" method="POST" action="supplier_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" name="photo" id="photo">
                        </div>
                    </div>
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
                        <label for="email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone_number" class="col-sm-3 control-label">Phone Number</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                    </div>
                    </div>

                 <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i
                        class="fa fa-save"></i> Save</button>
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
                        <h2 id="del_supplier" class="bold"></h2>
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
                <h4 class="modal-title"><b>Update Supplier</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="supplier_edit.php">
                    <input type="hidden" class="supid" name="id">
                            <div class="form-group">
                                <label for="edit_business_name" class="col-sm-3 control-label">Business Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edit_business_name" name="business_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_address" class="col-sm-3 control-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="edit_address" name="address"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="edit_email" name="email" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="edit_phone_number" class="col-sm-3 control-label">Phone Number</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="edit_phone_number" name="phone_number" >
                                </div>
                            </div>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                    class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-success btn-flat" name="edit"><i
                                    class="fa fa-check-square-o"></i>Update</button>
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