<?php
include('../../../dbcon.php');
$sql = "SELECT * FROM applicantdb";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Southern Jade Life Insurance</title>
  <link rel="icon" href="images/logajade.png" type="image/x-icon">
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../Pictures/loghousetitle.jpg" />
  <script src="https://kit.fontawesome.com/866d550866.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo-topnav.png" class="mr-3" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logajade.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="../logout.php">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">&nbsp;Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/agents.php">
            <i class="fa-solid fa-user-tie menu-icon"></i>
              <span class="menu-title">&nbsp;&nbsp;Agents</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fa-solid fa-users menu-icon"></i>
              <span class="menu-title">Clients</span>
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fa-sharp fa-solid fa-house menu-icon"></i>
              <span class="menu-title">Room</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">All Rooms</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Add Rooms</a></li>
              </ul>
            </div>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fa-solid fa-file-invoice menu-icon"></i>
              <span class="menu-title">&nbsp;&nbsp;Policies</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fa-solid fa-bullhorn menu-icon"></i>
              <span class="menu-title">&nbsp;Announcements</span>
            </a>
          </li>
          </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
      
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                  <div class="row">
                    <div class="container-sm">
                        <div class="card border border-success border-3 rounded-4 mb-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-2 p-3 text-center">
                                    <h5>Total Clients</h5>
                                    <h1>10</h1>
                                </div>
                                <div class="col-lg-2 p-3 text-center">
                                    <h5>Total Renewals</h5>
                                    <h1>10</h1>
                                </div>
                                <div class="col-lg-4 p-3 text-center">
                                    <h5>Commssions Earned</h5>
                                    <h1>₱60,000</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card border border-success border-3 rounded-4 mb-4">
                            <div style="font-size: 25px;" class="card-header bg-transparent border-success">Applicant List</div>
                            <div class="card-body">
                                <?php
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_array($result)){
                                        $fullname = $row['Lastname'] . ', ' . $row['Firstname'] . ' ' . $row['Middlename'][0] . '.';
                                        $address = $row['streetname'] . ', ' . $row['barangay'] . ', ' . $row['city'] . ', ' . $row['province'];
                                        ?>
                                        <div class="row justify-content-center border-bottom border-secondary">
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Name:</p>
                                                <p style="font-size: 15px;" class="text-dark"><?php echo $fullname ?></p>
                                            </div>
                                            <div class="col-lg-6">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Address:</p>
                                                <p style="font-size: 15px;" class="text-dark"><?php echo $address ?></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Contact No:</p>
                                                <p style="font-size: 15px;" class="text-dark"><?php echo $row['contact_number'] ?></p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Date of Birth:</p>
                                                <p style="font-size: 15px;" class="text-dark">09/16/2023</p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Amount to Pay:</p>
                                                <p style="font-size: 15px;" class="text-dark">₱7000</p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Payment Interval:</p>
                                                <p style="font-size: 15px;" class="text-dark">Monthly</p>
                                            </div>
                                            <div class="col-lg-3">
                                                <p style="font-size: 15px;" class="text-secondary mb-0">Status:</p>
                                                <p style="font-size: 15px;" class="text-warning">New Applicant <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row['application_id'] ?>"><i class="fa-solid fa-question"></i></button></p>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modal<?php echo $row['application_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="font-size: 15px;" class="text-secondary mb-0">Name:</p>
                                                    <p style="font-size: 15px;" class="text-dark"><?php echo $fullname ?> </p>
                                                    <p style="font-size: 15px;" class="text-secondary mb-0">Email:</p>
                                                    <p style="font-size: 15px;" class="text-dark"><?php echo $row['Email'] ?> </p>
                                            
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

