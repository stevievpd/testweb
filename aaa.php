<!--STATUS-->
<div class="modal fade" id="status">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="po_id"></span></b></h4>
                <h3 id="edit_purchase_order" class="bold"></h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="change_status.php">
                    <input type="hidden" class="purchaseid" name="id">
                    <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_status" name="status">                          
                                <?php
                                    $sql = "SELECT * FROM status";  
                                    $query = $conn->query($sql);
                                    while($brow = $query->fetch_assoc()){
                                        echo "
                                        <option value='".$brow['id']."'>".$brow['status_description']."</option>
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
            </div>
                </form>
        </div>
    </div>
</div> 