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
        Inventory
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Inventory</li>
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
                  <th>Photo</th>
                  <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Unit Cost</th>
                  <th>Unit Price</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                <?php
                   $sql = "SELECT *, inventory.id as inventoryID FROM inventory LEFT JOIN supplier_product on supplier_product.supplier_product_id = inventory.product_id";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                          <td><img src="<?php echo (!empty($row['photo']))? './images/'.$row['photo']:'./images/profile.jpg';?>" width="30px" height="30px"><a href="#edit_photo" data-toggle="modal" class="pull-right photo" data-id="<?php echo $row['id']; ?>"><span class="fa fa-edit"></span></a></td>
                          <td><?php echo $row['product_id'];  ?></td>
                          <td><?php echo $row['supplier_product_name']; ?></td>
                          <td><?php echo $row['description']; ?></td> 
                          <td>₱ <?php echo $row['quantity']; ?></td>
                          <td>₱ <?php echo $row['cost']; ?></td>
                          <td>₱ <?php echo $row['price']; ?></td>
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['inventoryID']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['inventoryID']; ?>"><i class="fa fa-trash"></i> Delete</button>
                          </td>
                        </tr>
                      <?php
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
    
  <?php include 'footer.php'; ?>
  <?php include 'inventory_modal.php'; ?>
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
    
    $('#example1').on('click', '.photo', function(e){
      e.preventDefault();
      var id = $(this).data('id');
      getRow(id);
    });

  });

function getRow(id){
  $.ajax({
      type: 'POST',
      url: 'inventory_row.php',
      data: {id:id},
      dataType: 'json',
    success: function(response){
      $('.invid').val(response.id);
      $('#del_inventory').html(response.description);
      $('.inventory_id').val(response.id);
      $('#edit_description').val(response.description);
      $('#edit_quantity').val(response.quantity);
      $('#edit_cost').val(response.cost);
      $('#edit_price').val(response.price);
    }
  });
}
</script>
</body>
</html>
