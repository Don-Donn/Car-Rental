<!-- include session/ confirm login? -->


<!DOCTYPE html>
<html>

    <title>UNIVERSITY SHOP</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles-->
    <link rel="stylesheet" href="../css/sidebar.css">
 
 
    </head>

    <body>
            
        <div id = wrapper> <!-- Page Wrapper/Add Div wrapper -->
            <nav  id="sidebar">
                <div class="brand-container">
                    <img id="spartanLlogo" src="../icons/redSpartan.png" alt="Logo" width="95" height="102" >
                    <p class="univ-txt">University <br>Shop</p>
                </div>
                <ul>

                    <!-- Divider -->
                    <hr class="sidebar-divider" id="header-hr">

                    <!-- Nav Items -->
                    <li class="nav-item">
                        <a class="nav-link"  href="dashboard.php">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"  href="rentals.php">
                            <i class="fa-solid fa-warehouse"></i>
                            <span>Rentals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="history.php">
                            <i class="fa-solid fa-clipboard-list fa-lg"></i>
                            <span>Transaction History</span>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="cars.php">
                            <i class="fa-solid fa-bullhorn"></i>
                            <span>Car Section</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="navLink5" href="accounts.php">
                            <i class="fa-solid fa-user"></i>
                            <span>Accounts</span>
                        </a>
                    </li>
                </ul>


                    <!-- Divider -->
                    <br><br><br><br><br><br><br><br>
                    <hr class="sidebar-divider" id="logout-hr">

                    <!-- Sidebar Toggler (Logout) -->
                    
                    <button id="btn" name="btn" class="logout-btn">Logout</button>

                    </div>

            </nav>

            <script src="../css/sidebar.js"></script>
            <!-- End of Sidebar -->



<!-- include_once topbar/header -->
<?php include_once 'topbar.php'; ?>
<?php include_once '../pages/logoutAdmin.php'; ?>






        
