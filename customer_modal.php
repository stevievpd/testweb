<!-- View -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Customer</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="customer_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="firstname" class="col-sm-3 control-label">First Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Last Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact_info" class="col-sm-3 control-label">contact_info</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="contact_info" id="contact_info"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" id="address"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="employee" class="col-sm-3 control-label">employee</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="employee" id="employee" required>
                                <option value="" selected>- Select -</option>
                                <?php
                                  $sql = "SELECT * FROM employees";
                                  $query = $conn->query($sql);
                                  while($prow = $query->fetch_assoc()){
                                    echo "
                                      <option value='".$prow['id']."'>".$prow['firstname']. ' ' .$prow['firstname']."</option>
                                    ";
                                  }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="file" name="photo" id="photo">
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
                <h4 class="modal-title"><b>Update Deduction</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="deduction_edit.php">
                    <input type="hidden" class="decid" name="id">
                    <div class="form-group">
                        <label for="edit_description" class="col-sm-3 control-label">Description</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_description" name="description">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_amount" class="col-sm-3 control-label">Amount</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_amount" name="amount">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
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
                <form class="form-horizontal" method="POST" action="deduction_delete.php">
                    <input type="hidden" class="decid" name="id">
                    <div class="text-center">
                        <p>DELETE DEDUCTION</p>
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