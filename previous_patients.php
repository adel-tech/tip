<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>



<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>ENDEMIC - MEDIPLUZZ</title>
    <title></title>
  </head>
  <body>






  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Add Previous Patients</title>
</head>

</head>
<body>
  <div class= "container"></div>
<!--  <a class="float-right" href="logout.php">Logout</a> -->
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header">
        <nav class="navbar navbar-expand-lg bg-white fixed-top">
            <a class="navbar-brand" href="home.php"><img class="logo-img" src="assets/images/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-right-top">
                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                     <h1>Dr.<?php echo $_SESSION['username']; ?> </h1>
                                <span class="status"></span><span class="ml-2">Current User</span>
                            </div>
                            <!--<a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>-->
                            <!--<a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>-->
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="home.php">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="home.php"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Patient</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php">New Register<span class="badge badge-secondary">New</span></a>
                                        <a class="nav-link" href="all.php">Total Registered Patients<span class="badge badge-secondary">New</span></a>
                                        <a class="nav-link" href="todays_patients.php">Today's Registered Patients<span class="badge badge-secondary">New</span></a>

<a class="nav-link" href="previous_patients.php">Add Previous Patients<span class="badge badge-secondary">New</span></a>
<a class="nav-link" href="previous_patients_view.php">View Added Previous Patients<span class="badge badge-secondary">New</span></a>
                                  </li>
                                   <!-- <li class="nav-item">
                                        <a class="nav-link" href="all.php"> Patients List </a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>

                                <!--    <li class="nav-item">
                                        <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false">Consultating<span class="badge badge-secondary">New</span></a>
                                       <a class="nav-link" href="total_patients.php">Consultation List<span class="badge badge-secondary">New</span></a>
                                        <a class="nav-link" href="todays_consultes_patients">Today's Consulted Patients<span class="badge badge-secondary">New</span></a>

                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>Consulting</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                  <!--      <a class="nav-link" href="login.php">New Register<span class="badge badge-secondary">New</span></a> -->
                                        <a class="nav-link" href="total_consultation.php">All Consulted Patients<span class="badge badge-secondary">New</span></a>
                                        <a class="nav-link" href="todays_consulted_patients.php">Today's Consulted Patients<span class="badge badge-secondary">New</span></a>
<a class="nav-link" href="lab_display.php">Patient's Lab Reports<span class="badge badge-secondary">New</span></a>
                                    </li>
                                   <!-- <li class="nav-item">
                                        <a class="nav-link" href="all.php"> Patients List </a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>
                       <!-- <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">

                            <h2 class="pageheader-title">ENDEMIC MEDIPLUZZ </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Developed & Maintained by Endemic Software Solutions</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

<div class="container">
  <h3>Add Previous Patients</h3>
  <br>
                  <form class="form-group" method="post">
                    <div class="col">


                    Name<input type="text" class="form-control col-sm-6" name="name" placeholder="Enter Patient's Name" required><br>
                    Place<input type="text" class="form-control col-sm-6" name="place" placeholder="Enter Patient's Place" required><br>
                    Token No<input type="number" class="form-control col-sm-6"   name="code" placeholder="Enter the Patient's Token Number" required ><br>
                    Age<input type="number" class="form-control col-sm-6"  name="age" placeholder="Enter the Patient's Age" required ><br>
                    Contact No<input type="number" class="form-control col-sm-6"  name="contact" placeholder="Enter Patient's Contact Number" required ><br>
                    Secondary Contact<input type="number" class="form-control col-sm-6"  name="secondarycontact" placeholder="Enter Patient's Secondary Contact Number" required ><br>
                    <label>Select Gender</label>
                      <select name="gender" class="form-control col-sm-6"  required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                      </select>
                      <br>
                    <button type="submit" class="btn btn-success" name="submit" formaction="previous_patients_submit.php" >Add</button>
                    <button type="cancel" class="btn btn-light" name="cancel" formaction="home.php"> <a href="home.php" >Cancel</a>  </button>
                    </div>
                    </form>
</div>

            <!--       <form method="post"><button  formaction="all.php">Total Registered Patients</button><br>
                    <form method='post'><button name='list' formaction='consultation_list.php'>Today's consultation details</button></form> -->
                </div>
              </div>
              <!-- footer -->
              <!-- ============================================================== -->
              <div class="footer">
                  <div class="container-fluid">
                      <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <a href="https://endemicsoftwares.com" target="new">Copyright © 2020 All rights reserved by ENDEMIC </a>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="text-md-right footer-links d-none d-sm-block">
                    <!--<a href="#">About</a>-->
                    <!--<a href="#">Support</a>-->
                    <a href="#">Contact Us: +91 74567568688</a>
                        <a href="#"> endemicsoftwares@gmail.com</a>
                </div>
            </div>
        </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end footer -->
            </div>
            </div>

            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
            <!-- chart chartist js -->
            <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
            <!-- sparkline js -->
            <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
            <!-- morris js -->
            <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
            <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
            <!-- chart c3 js -->
            <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
            <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
            <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
            <script src="assets/libs/js/dashboard-ecommerce.js"></script>

</body>
</html>
