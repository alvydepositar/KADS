<?php
session_start();
// check if user is logged in
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    //user is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
    //user has role 2, redirect to userprofile.php
    header("Location: ../userprofile.php");
    exit();
}
    include "../conn.php";
    $username = $_SESSION['username'];
    
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KADS | Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <!--<link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"> -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">

    <style>    
        /* Style The Dropdown Button */
        *{
            font-family: "Readex Pro";
        }
        .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #f1f1f1}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
        }

        /*********************/
        .order-group {
            padding-left:0;
            padding-right: 50px;    
            overflow-x: hidden;  
        }
        .total-row {
            padding-top:10px;
        }
        .order-total {
            color:#8e0001;    
        }
        .order-price, .total-text {
            text-align: right;
        }
        .col-btn {    
            padding:0;    
        }
        .managebtns{
            overflow:hidden;
        }
    </style>
</head>



<body>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">

                <!-- ============================================================== -->
                <!-- Logo | Uncomment na lang kapag meron na -->
                <!-- ============================================================== -->

                   <!-- <a class="navbar-brand" href="dashboard.php">
                        <b class="logo-icon">
                            <img src="../plugins/images/logo-icon.png" alt="homepage" />
                        </b>
                        <span class="logo-text">
                            <img src="../plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a> -->
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                            <div class="dropdown">
                            <img src="../img/logo.png" alt="user-img" width="36"
                                class="img-circle"><span class="text-white font-medium"><?php echo $username; ?></span></a>
                                <div class="dropdown-content">
                                    <a href="profile.php">Profile</a>
                                    <a href="../logout.php">Logout</a>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="users.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="products.php"
                                aria-expanded="false">
                                <i class="fab fa-gulp" aria-hidden="true"></i>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="category.php"
                                aria-expanded="false">
                                <i class="fab fa-gulp" aria-hidden="true"></i>
                                <span class="hide-menu">Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="order-history.php"
                                aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Order History</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="feedbacks.php"
                                aria-expanded="false">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <span class="hide-menu">Feedbacks</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title" style="font-size:18px;">Orders</h4>
                    </div>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            
                            <h3 class="box-title">Orders
                            </h3>     
                            <div class="table-responsive">                              
                                <table class="table no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0" style="width:220px;">Date</th>
                                            <th class="border-top-0" style="width:200px;">Status</th>
                                            <th class="border-top-0">Order Details</th>    
                                            <th class="border-top-0" style="width:250px;">Manage</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query="SELECT * FROM user_orders JOIN products ON user_orders.product_id = products.p_id ORDER BY date DESC" ;
                                            $result=mysqli_query($conn,$query);
                                            $order_by_date = array();
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                $date = date('Y-m-d H:i:s', strtotime($row['date']));
                                                    if (!isset($order_by_date[$date])) {
                                                        $order_by_date[$date] = array();
                                                        $order_by_date[$date]['total'] = 0;
                                                        $order_by_date[$date]['order_number'] = $row['order_number'];
                                                        $order_by_date[$date]['status'] = $row['status'];
                                                    }
                                                    $order_by_date[$date]['total'] += $row['price'] * $row['quantity'];
                                                    array_push($order_by_date[$date], $row);
                                                }
                                            foreach ($order_by_date as $date => $orders) {
                                        ?>                                    
                                        <tr>
                                            <td><?php echo $date; ?></td>
                                            <td> 
                                                <?php
                                                    if ($orders['status'] == 1 || $orders['status'] == 2) {
                                                ?>
                                                <select name="status[<?php echo $orders['status']; ?>]" onchange="updateStatus(this, <?php echo $orders['order_number']; ?>)" >
                                                    <option value=1 <?php if($orders['status'] == 1) echo 'selected'; ?>>Preparing</option>
                                                    <option value=2 <?php if($orders['status'] == 2) echo 'selected'; ?>>Out for Delivery</option>
                                                    <option value=3 <?php if($orders['status'] == 3) echo 'selected'; ?>>Completed</option>
                                                </select>
                                                <?php
                                                    } elseif ($orders['status'] == 3) {
                                                        echo "<div class='order-progress p-completed'>Completed</div>";
                                                    }  
                                                ?>
                                            </td>
                                            <td>
                                                <div class="container order-group">                            
                                                    <?php 
                                                        foreach ($orders as $row) {
                                                            if (is_array($row)) {
                                                    ?> 
                                                        <div class="row">                        
                                                            <div class="col-1"><?php echo $row['quantity']?>x</div>
                                                            <div class="col-9"><?php echo $row['productName']?></div>
                                                            <div class="col order-price">P<?php echo $row['price']?></div>
                                                        </div>
                                                    <?php 
                                                        } 
                                                    }  ?>
                                                        <div class="row total-row">                        
                                                            <div class="col-1"></div>
                                                            <div class="col-9 total-text"><b>Total</b></div>
                                                            <div class="col order-total order-price"><b>P<?php echo $order_by_date[$date]['total']+60; ?></b></div>                                                           
                                                        </div>
                                                </div>
                                            </td>      
                                            <td class="managebtns">
                                                <div class="row row-btn">
                                                    <div class="col col-btn">
                                                        <a class="btn btn-solid" href="view-order.php?o_id=<?php echo $order_by_date[$date]['order_number']?>">View </a>
                                                        <a class="btn btn-solid" href="edit-order.php?o_id=<?php echo $order_by_date[$date]['order_number']?>">Edit</a>
                                                        <a class="btn btn-solid" href="delete-order.php?o_id=<?php echo $order_by_date[$date]['order_number']?>">Delete</a>
                                                    </div>  
                                                </div>
                                            </td>                                      
                                        </tr>
                                        <?php } ?>                                        
                                    </tbody>
                                </table>                        
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
             <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            KADS | EST 2022
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script>
    function updateStatus(statusSelect, orderId) {
    var newStatus = statusSelect.value;
        $.ajax({
            type: "POST",
            url: "edit-order.php",
            data: { order_id: orderId, status: newStatus },
            success: function(response) {
                console.log(response);
            }
        });
        location.reload();
    }
</script>

</body>
</html>