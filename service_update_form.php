<?php
      require 'connectdb.php';

      $booking_service_id = $_GET['booking_service_id'];

      $qservice = "SELECT * FROM booking_service WHERE booking_service_id='$booking_service_id' ";

      $resservice = mysqli_query($dbcon, $qservice);
      $rowservice = mysqli_fetch_array($resservice, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>บริการ</title>

        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">



    </head>
    <body class="dg-dark">

      <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">แก้ไขข้อมูล</div>
            <div class="card-body">
                <form action="service_update.php" method="post" enctype="multipart/form-data" id="form">




        <label>การบริการ: </label><input type="text" name="service_name" id="service_name" class="form-control" value="<?php echo $rowservice['service_name']; ?>">
        <label>ค่าบริการ: </label><input type="text" name="service_price" id="service_price" class="form-control" value="<?php echo $rowservice['service_price']; ?>">
        <input type="hidden" name="booking_service_id" value="<?php echo $rowservice['booking_service_id']; ?>">
        
        <input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล">

  </form>
</div>
</div>
</div>
   <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    </body>



</html>
