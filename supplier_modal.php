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
                <form class="form-horizontal" method="POST" action="deduction_add.php">
                    <div class="form-group">
                        <label for="supplier_name" class="col-sm-3 control-label">Supplier Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="supplier_name" name="supplier_name" required>
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
                        <label for="phone_number" class="col-sm-3 control-label">Phone Name</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="bank" class="col-sm-3 control-label">Bank</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="bank" id="bank">
                                <option selected id="bank"></option>
                                <option value="BDO Unibank Inc.">BDO Unibank Inc.</option>
                                <option value="Metropolitan Bank and Trust Company">Metropolitan Bank and Trust Company</option>
                                <option value="Bank of the Philippine Islands">Bank of the Philippine Islands</option>
                                <option value="Land Bank of the Philippines">Land Bank of the Philippines</option>
                                <option value="Philippine National Bank">Philippine National Bank</option>
                                <option value="Security Bank">Security Bank</option>
                                <option value="China Banking Corporation">China Banking Corporation</option>
                                <option value="Development Bank of the Philippines">Development Bank of the Philippines</option>
                                <option value="Union Bank of the Philippines">Union Bank of the Philippines</option>
                                <option value="Rizal Commercial Banking and Corporation">Rizal Commercial Banking andCorporation</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bank_account" class="col-sm-3 control-label">Bank Account</label>

                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="bank_account" name="bank_account" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="branch" class="col-sm-3 control-label">Branch</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="branch" name="branch" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tin" class="col-sm-3 control-label">Tin</label>

                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="tin" name="tin" required>
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
                <h4 class="modal-title"><b>Update Supplier</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="inventory_edit.php">
                    <input type="hidden" class="invid" name="id">
                    <div class="form-group">
                        <label for="supplier_name" class="col-sm-3 control-label">Supplier Name</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="supplier_name" name="supplier_name" required>
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
                        <label for="phone_number" class="col-sm-3 control-label">Phone Name</label>

                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bank" class="col-sm-3 control-label">Bank</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="bank" id="bank">
                                <option selected id="bank"></option>
                                <option value="BDO Unibank Inc.">BDO Unibank Inc.</option>
                                <option value="Metropolitan Bank and Trust Company">Metropolitan Bank and Trust Company</option>
                                <option value="Bank of the Philippine Islands">Bank of the Philippine Islands</option>
                                <option value="Land Bank of the Philippines">Land Bank of the Philippines</option>
                                <option value="Philippine National Bank">Philippine National Bank</option>
                                <option value="Security Bank">Security Bank</option>
                                <option value="China Banking Corporation">China Banking Corporation</option>
                                <option value="Development Bank of the Philippines">Development Bank of the Philippines
                                </option>
                                <option value="Union Bank of the Philippines">Union Bank of the Philippines</option>
                                <option value="Rizal Commercial Banking and Corporation">Rizal Commercial Banking and
                                    Corporation</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bank_account" class="col-sm-3 control-label">Bank Account</label>

                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="bank_account" name="bank_account" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="branch" class="col-sm-3 control-label">Branch</label>

                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="branch" name="branch" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tin" class="col-sm-3 control-label">Tin</label>

                        <div class="col-sm-9">
                            <input type="tel" class="form-control" id="tin" name="tin" required>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                                class="fa fa-close"></i> Close</button>
                        <button type="submit" class="btn btn-success btn-flat" name="edit"><i
                                class="fa fa-check-square-o"></i>
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
                        <p>DELETE SUPPLIER</p>
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