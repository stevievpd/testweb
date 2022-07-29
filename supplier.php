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
      Supplier
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Supplier</li>
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
                  <th>Supplier Number</th>
                  <th>Logo</th>
                  <th>Business Name</th>
                  <th>Product</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Time Stamp</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT * FROM supplier";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['id']."</td>
                          ";
                  ?>
                          <td><img src="<?php echo (!empty($row['logo']))? './images/supplier_img/'.$row['logo']:'./images/profile.jpg'; ?>" width="30px" height="30px"></td>
                  <?php
                          echo "
                          <td>".$row['business_name']."</td>
                          <td>".$row['product']."</td>
                          <td>".$row['address']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['phone_number']."</td>
                          <td>".date('M d, Y', strtotime($row['stamp']))."</td>
                          <td>
                            <button class='btn btn-success btn-sm edit btn-flat' data-id='".$row['id']."'><i class='fa fa-edit'></i> Edit</button>
                            <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['id']."'><i class='fa fa-trash'></i> Delete</button>
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
  <?php include 'supplier_modal.php'; ?>
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
    url: 'supplier_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.supid').val(response.id);
      $('#edit_logo').val(response.logo);
      $('#edit_business_name').val(response.business_name);
      $('#edit_product').val(response.product);
      $('#edit_address').val(response.address);
      $('#edit_email').val(response.email);
      $('#edit_phone_number').val(response.phone_number);
      $('.del_supplier_name').val(response.business_name);
      $('.del_supid').val(response.id);
    }
  });
}
</script>
</body>
</html>
