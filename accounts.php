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
                    Accounts
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li>Accounts</li>
                    <li class="active">Accounts </li>
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
                    <div class="col-xs-6">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-plus"></i> New</a>
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Username/th>
                                        <th>Member Since</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['employee_id']; ?></td>
                                            <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                                            <td><?php echo $row['description']; ?></td>
                                            <td><?php echo date('M d, Y', strtotime($row['created_on'])) ?></td>

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
        <?php include 'employee_modal.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>

    <script>
    $(function() {
        $('#example1').on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $('#example1').on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $('#example1').on('click', '.photo', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'employee_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.empid').val(response.empid);
                $('.employee_id').html(response.employee_id);
                $('.del_employee_name').html(response.firstname + ' ' + response.lastname);
                $('#employee_name').html(response.firstname + ' ' + response.lastname);
                $('#edit_firstname').val(response.firstname);
                $('#edit_lastname').val(response.lastname);
                $('#edit_address').val(response.address);
                $('#datepicker_edit').val(response.birthdate);
                $('#edit_contact').val(response.contact_info);
                $('#gender_val').val(response.gender).html(response.gender);
                $('#position_val').val(response.position_id).html(response.description);
                $('#schedule_val').val(response.schedule_id).html(response.time_in + ' - ' + response
                    .time_out);
            }
        });
    }
    </script>
</body>

</html>