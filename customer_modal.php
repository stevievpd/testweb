<!-- Add -->
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
                        <label for="customer_firstname" class="col-sm-3 control-label">First Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="customer_firstname" name="customer_firstname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customer_lastname" class="col-sm-3 control-label">Last Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="customer_lastname" name="customer_lastname" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customer_contact_info" class="col-sm-3 control-label">contact_info</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_contact_info" id="customer_contact_info"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customer_address" class="col-sm-3 control-label">address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="customer_address" id="customer_address"></input>
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
                                      <option value='".$prow['id']."'>".$prow['firstname']. ' ' .$prow['lastname']."</option>
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
                <h4 class="modal-title"><b>Update Customer</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="customer_edit.php">
                    <input type="hidden" class="editCustomer" name="id">
                    <div class="form-group">
                        <label for="editname" class="col-sm-3 control-label">First Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="editCustomerFirstName" name="edit_customer_first_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editname" class="col-sm-3 control-label">Last Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="editCustomerLastName" name="edit_customer_last_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="customercontact" class="col-sm-3 control-label">Contact Number</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="editContact" name="edit_customer_contact">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="editname" class="col-sm-3 control-label">Address</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="editCustomerAddress" name="edit_customer_address">
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
                <form class="form-horizontal" method="POST" action="customer_delete.php">
                    <input type="hidden" class="customer_delete" name="id">
                    <div class="text-center">
                        <p>DELETE CUSTOMER</p>
                        <h2 id="del_deduction" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>