<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> KADS | Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../img/logo.png">
    <!--<link href="../plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"> -->
    <link href="../css/style.min.css" rel="stylesheet">
    <link href="../css/pagestyles.css" rel="stylesheet">

    <style>    
            body{font: 14px sans-serif; background-color:#eeeeee; font-family: 'Poppins';color: #141C07;}

            /* Style The Dropdown Button */
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
            .contentblock{     
                background-color:#fff;   
                height: 280px;
                width: 400px;
                border-radius: 10px;
                position:relative;
                top:50px;
                left:calc(50% - 400px/2);
                padding:20px;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
                margin-top:20px;
                margin-bottom:100px;
            }
            h2{
                font-weight: 700;
                font-size: 25px;      
            }
            h1{        
                margin-top:20px;
                font-size: 14px;
                font-weight:600;
            }
            .contentblock p{        
                margin:5px;
            }
            .btn-edit{
                background-color: #C70800;
                color: #fff;
                border: none;
                font-weight: 600;
                font-size: 14px;
                border-radius:5px;
                padding:7px;
                width: 80px;
                margin-left:270px;
                margin-top: 10px;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.15);
            }
            .btn-edit:hover,.btn-edit:focus{
                background-color: #8e0001;
                color: #fff;
                transition: 0.25s all ease;
            }
            .back-icon img{
                    width: 40px;
                    height: 40px;
                    top: 60px;
                    left: calc(55% - 700px/2);
                    position: absolute;            
                }
            .back-icon img:hover{
                opacity:0.7;
                transition: 0.25s all ease;      
            }
            b{
                font-weight:600;
                color:#C70800;
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
                                class="img-circle"><span class="text-white font-medium">Username</span></a>
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
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="back-icon">
                <a href="../admin/users.php">
                    <img src="../img/backicon.png">
                </a>
            </div>            
            <div class="mainblock" style="height:510px;">
                <div class="contentblock">                    
                    <h2>View User</h2> 
                    <div class="container">
                        <div class="row" style="border-bottom: 1px solid #ECEFD7;">
                            <p>
                            <div class="col p-1"><b>NAME:</b></div>
                            <div class="col-8 p-1">firstname middlename lastname<?php //echo $row['firstname'] . ' ' . $row['middlename'] .' '. $row['lastname'] ; ?></div> 
                            </p>                       
                        </div>  
                        <div class="row" style="border-bottom: 1px solid #ECEFD7;">
                            <p>
                            <div class="col p-1"><b>USERNAME:</b></div>
                            <div class="col-8 p-1">username<?php //echo $row['username']; ?></div> 
                            </p>                       
                        </div>  
                        <div class="row">
                            <p>
                            <div class="col p-1"><b>ROLE:</b></div>
                            <div class="col-8 p-1">name<?php //echo $row['name']; ?></div> 
                            </p>                       
                        </div>                    
                    </div> 
                    

                    
                    <p> </p>
                    <p><b></b> </p>
                    
                    <a href="edit-user.php?userID=<?php //echo $row['id'] ?>"><button class="button btn-edit">Edit</button></a>
                </div>
            </div>    
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Protein Blends PH by Positive Nutrition | EST 2010
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
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</body>

</html>
        <?php
    //}
?>