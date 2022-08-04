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
        Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="supplier.php"></a>Supplier</li>
        <li class="active">Products</li>
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
                  <!-- <th>Supplier</th> -->
                  <th>Product Code</th>
                  <th>Product Supplier</th>
                  <th>Product Name</th>
                  <th>Product Description</th>
                  <th>Actions</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM product";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                            <td>".$row['product_code']."</td>
                            <td>".$row['product_name']."</td>
                            <td>".$row['product_description']."</td>
                            <td>".$sjd ."</td>
                            <td>
<<<<<<< HEAD:supplier_product.php
                                <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['supplier_product_id']."'><i class='fa fa-edit'></i> Edit</button>
                                <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['supplier_product_id']."'><i class='fa fa-trash'></i> Delete</button>
=======
                                <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['product_id']."'><i class='fa fa-edit'></i> Edit</button>
                                <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['product_id']."'><i class='fa fa-trash'></i> Delete</button>
>>>>>>> 669184148367ba983e600912d6321cfd6136f746:product.php
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
    
  <?php include 'footer.php'; ?>
  <?php include 'product_modal.php'; ?>
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
      });

      function getRow(id){
        $.ajax({
          type: 'POST',
          url: 'product_row.php',
          data: {id:id},
          dataType: 'json',
          success: function(response){
<<<<<<< HEAD:supplier_product.php
            $('.product_id').val(response.supplier_product_id);
            $('#edit_prodCode').val(response.supplier_product_code);
            $('#edit_prodName').val(response.supplier_product_name);
            $('#edit_prodDesc').val(response.supplier_product_description);
=======
            $('.product_id').val(response.product_id);
            $('#edit_prodCode').val(response.product_code);
            $('#edit_prodName').val(response.product_name);
            $('#edit_prodDesc').val(response.product_description);
>>>>>>> 669184148367ba983e600912d6321cfd6136f746:product.php
          }
        });
      }
  </script>
</body>
</html>
