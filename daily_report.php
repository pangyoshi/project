<?php
    require 'connectdb.php';


//    $q = "SELECT * FROM quese_walkin LEFT JOIN status_type ON quese_walkin.q_status=status_type.status_id LEFT JOIN county_category ON quese_walkin.user_car_county=county_category.county_id";
//    $result = mysqli_query($dbcon, $q);

    $q = "SELECT * FROM booking LEFT JOIN booking_service ON booking.booking_service_id=booking_service.service_name ";
    $result = mysqli_query($dbcon, $q);
?>


<!DOCTYPE html>

<html>
<head lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>รายการคิว</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

    <!--
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <title>ลูกค้า</title>
    
            <style type="text/css" media="print">
            input{
                display:none;
                }
                
                @page{margin:0;}
            </style>
    
    
    
    <style>
        table,th,td {
            border: 1px solid blck;
            border-color: collapse;
        }
        
        
    </style>
</head>
<body id="page-top">

      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php">Carcare</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>



        <!-- Navbar -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope fa-fw"></i>
              <span class="badge badge-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activity Log</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
            </div>
          </li>
        </ul>
      </form>
      </nav>










  <div class="container-fluid">
      <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                คิวลูกค้า</div>
      <div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อลูกค้า</th>
            <th>หมายเลขโทรศัพท์</th>
            <th>ทะเบียนรถ</th>
            <!--<th>จังหวัดตามทะเบียน</th>-->
            <!--<th>เวลา</th>-->
            <!--<th>สถานะ</th>-->
            <!--<th>รูปแบบบริการ</th>-->
            <th>รูปแบบบริการ</th>
            <th>ราคา</th>
            
        </tr>
      </thead>
        <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
         ?>
         <tbody>
        <tr>
            <td><?php echo $row['booking_id']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['tel']; ?></td>
            <td><?php echo $row['license']; ?></td>
           <!-- <td><?php echo $row['province_name']?></td>-->
           <!-- <td><?php echo $row['time']; ?></td>-->
            <!--<td><?php echo $row['status_name']; ?></td>-->
          <!--  <td><?php echo $row['booking_service_id']; ?></td>-->
           <!-- <td><?php echo $row['type_name']; ?></td>-->
            <td><?php echo $row['service_name']; ?></td>
            <td><?php echo $row['service_price']; ?></td>
            
           
        </tr>
        <?php

            }
            mysqli_free_result($result);
            mysqli_close($dbcon);
        ?>

      </tbody>
    </table></div><input type="button" name="button" id="button" value="พิมพ์" onclick="print();"><i class="fa fa-print" style="font-size:30px;"></i>
  </div>

</div>
</div>
<!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
