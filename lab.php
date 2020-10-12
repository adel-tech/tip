<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}

?>
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





    <?php  ?>

  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>registration</title>
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
<a class="nav-link" href="previous_patients_view.php">View Added Previous Patients<span class="badge badge-secondary">New</span></a>                                </li>
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
                        <!--<li class="nav-item">
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
                        </li>-->
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

<?php include 'connection.php'; ?>

<?php
if (isset($_GET['lab'])) {

  $no=$_GET['lab'];
  $res=mysqli_query($conn,"SELECT * FROM redo WHERE no='$no'");
  $row=mysqli_fetch_array($res);
}
   ?> <form method="post">
     <button type="submit" class="btn btn-primary col-sm-6" name="display" formaction="display.php">Back to total patients</button>
   </form>


      <!-- <a class="float-right" href="logout.php">Logout</a>-->
    <?php
/*if (isset($_POST['newName']) || isset($_POST['newCode']) || isset($_POST['newAge']) || isset($_POST['newDate']) || isset($_POST['consultation']) || isset($_POST['enter']) || isset($_POST['newContact'])) {
  $newName=$_POST['newName'];
  $newCode=$_POST['newCode'];
  $newAge=$_POST['newAge'];
  $newContact=$_POST['newContact'];
  $newDate=$_POST['newDate'];
  $consultation=$_POST['consultation'];
  $no=$_POST['no'];
  $sql="INSERT INTO daily (name,age,code,date,consultation,contact) VALUES ('$newName','$newAge','$newCode','$newDate','$consultation','$newContact')";
  $res=mysqli_query($conn,$sql);
  if ($res) {
    echo "successfully recorded";
  }
  else {
    echo "unsucessful";
  }
  echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
*/

 ?>
 <form class=""  method="post">

  Name<input type="text" class="form-control col-sm-6" name="newName" value="<?php echo $row['name']; ?>" readonly> <br>

  Place<input type="text" class="form-control col-sm-6" name="newPlace" value="<?php echo $row['place']; ?>" readonly> <br>

Token No<input type="number" class="form-control col-sm-6"  name="newCode" value="<?php echo $row['code']; ?>" readonly> <br>

Age<input type="number" class="form-control col-sm-6"  name="newAge" value="<?php echo $row['age']; ?>" readonly> <br>

Date<input type="text" class="form-control col-sm-6"  name="newDate" value="<?php echo $row['date']; ?>" readonly> <br>

Contact<input type="number" class="form-control col-sm-6"  name="newContact" value="<?php echo $row['contact']; ?>" readonly> <br>

Secondary Contact<input type="number" class="form-control col-sm-6" name="newSecondaryContact" value="<?php echo $row['secondarycontact']; ?>" readonly><br>


  <input type="hidden" name="no" value="<?php echo $row['no']; ?>"><br>
  <input type="hidden" name="foreignkey" value="<?php echo $row['foreignkey']; ?>"><br>
<label> Lab Details </label> <br>
<textarea name="lab" rows="8" cols="80" placeholder="Enter Lab details" required ></textarea><br>

  <!-- <input type="submit" name="" value="enter" formaction="enter.php"> -->

<button type="submit" name="enter" formaction="lab_enter.php" class="btn btn-primary col-lg-3"> Enter </button>

 </form>
 <!--<a href="consultation_list.php">Daily Consultation List</a> -->

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
