<div class="modal fade" id="cancel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>CANCEL...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="purchase_order_delete.php">
                    <input type="hidden" class="po_id" name="id">
                    <div class="text-center">
                        <p>Are your sure you want to cancel this purchase order ?</p>
                        <h2 id="cancel_purchase_order" class="bold"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
                        class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
                    Confirm</button>
                </form>
            </div>
        </div>
    </div>

</div>