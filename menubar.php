<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? './images/'.$user['photo'] : './images/profile.jpg'; ?>"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">REPORTS</li>
            <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="header">MANAGE</li>

            <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Employees</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
                    <li><a href="position.php"><i class="fa fa-circle-o"></i> Positions</a></li>
                    <li><a href="schedule.php"><i class="fa fa-clock-o"></i> Schedules</a></li>
                    <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> Employee Schedules</a></li>
                </ul>
            </li>

            <li><a href="customer.php"><i class="fa fa-users"></i> <span>Customer</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Inventory</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="inventory.php"><i class="fa fa-circle-o"></i> Inventory</a></li>
                    <li><a href="supplier.php"><i class="fa fa-circle-o"></i> Supplier</a></li>
                    <li><a href="supplier_product.php"><i class="fa fa-circle-o"></i> Supplier Product</a></li>
                    <li><a href="purchase_order.php"><i class="fa fa-circle-o"></i> Purchase Order</a></li>
                </ul>
            </li>
            <li class="header">PRINTABLES</li>
            <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
            <li><a href="cashadvance.php"><i class="fa fa-clock-o"></i> <span>Cash Advance</span></a></li>
            <li><a href="deduction.php"><i class="fa fa-file-text"></i><span> Deductions</span></a></li>
            <li><a href="overtime.php"><i class="fa fa-clock-o"></i> <span>Overtime</a></span></li>

            <li class="header">SETTINGS</li>
            <li><a href="accounts.php"><i class="fa fa-users"></i> <span>Accounts</span></a></li>

            <li class="header">POINT OF SALES</li>
            <li><a href="accounts.php"><i class="fa fa-file"></i> <span>Point of Sales</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>