<?php include 'includes/session.php'; ?>
<?php include 'header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'navbar.php'; ?>
  <?php include 'menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Purchase Order
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Purchase Order</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>PO Number</th>
                  <th>Business Name</th>
                  <th>Product Name</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th>Grand Total</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT *, purchase_order.id as purchid FROM purchase_order LEFT JOIN supplier ON supplier.id=purchase_order.supplier_id LEFT JOIN supplier_product ON supplier_product.id=purchase_order.supplier_product_id LEFT JOIN status on status.id=purchase_order.status_id ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                    
                    $status = ($row['status_id'])?'<span class="label label-success pull-right">Received</span>':'<span class="label label-warning pull-right">Pending</span>';
                      echo "
                      <tr>
                      <td><i class='fa fa-list-ol' aria-hidden='true'></i> ".$row['purchase_order_id'].$status."</td>
                      <td><i class='fa fa-id-card-o' aria-hidden='true'></i> ".$row['business_name']."</td>
                      <td><i class='fa fa-th-large' aria-hidden='true'></i> ".$row['supplier_product_name']."</td>
                      <td>₱ ".$row['quantity']."</td>
                      <td>₱ ".$row['price']."</td>
                      <td>₱ ".$row['total']."</td>
                      <td>
                        <button class='btn btn-success btn-sm btn-flat edit' data-id='".$row['purchid']."'><i class='fa fa-edit'></i> Edit</button>
                        <button class='btn btn-danger btn-sm btn-flat delete' data-id='".$row['purchid']."'><i class='fa fa-trash'></i> Delete</button>
                        <button data-toggle='modal' class='btn btn-primary btn-sm btn-flat view' href='#poview' data-id='".$row['purchid']."'><i class='fa fa-eye'></i> View</button>
                        <button class='btn btn-info btn-sm btn-flat pdf' data-id='".$row['purchid']."'><i class='fa fa-file'></i> PDF</button>
                      </td>
                    </tr>
                  ";
                  }
                ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
  <!-- MODAL EDITAR-->
  <div id="poview" class="modal fade modal" role="dialog">
      <div class="vertical-alignment-helper">
          <div class="modal-dialog vertical-align-center">
            <div class="modal-content">


            </div>
          </div>
      </div>
  </div>
    
  <?php include 'footer.php'; ?>
  <?php include 'purchase_order_modal.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>

<script>
  $(function(){
    $('#example1').on('click', '.edit', function(e){
      e.preventDefault();
      $('#edit').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('#example1').on('click', '.delete', function(e){
      e.preventDefault();
      $('#delete').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $('#example1').on('click', '.view', function(e){
      var ID = $(this).attr('data-id');
      $.ajax({url:"view_po.php?ID="+ID,cache:false,success:function(result){
        $(".modal-content").html(result);
      }});
      // $('#view').modal('show');
      // var id = $(this).data('id');
      // getRow(id);
    });
    
    $('#example1').on('click', '.pdf', function(e){
      e.preventDefault();
      $('#pdf').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });


  });

function getRow(id){
  $.ajax({
      type: 'POST',
      url: 'purchase_order_row.php',
      data: {id:id},
      dataType: 'json',
    success: function(response){
      $('.po_id').val(response.id);
      $('.del_purchase_order').val(response.id);
      $('.purchaseid').val(response.id);
      $('#edit_purchase_order').html(response.purchase_order_id);
      $('#del_purchase_order').html(response.purchase_order_id);
      $('#edit_supplier').val(response.supplier_id);
      $('#edit_supplier_product').val(response.supplier_product_id);
      $('#edit_payment_terms').val(response.payment_id);
      $('#edit_product_description').val(response.product_description_id);
      $('#edit_description').val(response.description);
      $('#edit_quantity').val(response.quantity);
      $('#edit_cost').val(response.cost);
      $('#edit_price').val(response.price);
      $('#edit_sub_total').val(response.subtotal);
      $('#edit_sales_tax').val(response.sales_tax);
      $('#edit_total_amount').val(response.total);
      $('#edit_purchase_date').val(response.purchase_date);
      $('#edit_expected_date').val(response.expected_date);
      $('#edit_status').val(response.status_id);

    }
  });
}
</script>
</body>
</html>
