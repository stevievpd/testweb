<!-- Delete
<div class="modal fade" id="pdf_gen">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title">PDF </h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="payroll_generate.php">
            		<input type="hidden" class="otid" name="id">
            		<div class="text-center">
	                	<h2 class="payrollpdf bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div> -->

<!--PDF Payroll-->
<div class="modal fade" id="payroll_preview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div><a href="payroll_generate.php" target="iframe"></a>
                </div>
                <iframe src="payroll_generate.php" height="800" width="865" name="iframe"></iframe>
            </div>
        </div>
    </div>
</div>

<!--PDF Payslip-->
<div class="modal fade" id="payslip_preview">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div><a href="payslip_generate.php" target="iframe"></a>
                </div>
                <iframe src="payslip_generate.php" height="800" width="865" name="iframe"></iframe>
            </div>
        </div>
    </div>
</div>
