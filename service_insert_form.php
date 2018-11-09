<?php
    require 'connectdb.php';
    $type = "1";
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
        <div class="card-header">เพิ่มบริการ</div>
        <div class="card-body">


  <form action="service_insert.php" method="post"enctype="multipart/form-data" id="from">




          <label>ชื่อ: </label>
          <input type="text" name="service_name" id="service_name" class="form-control" require="require" placecholder="ชื่อ">





          <label>ราคา: </label>
          <input type="text" name="service_price" id="service_price" class="form-control" require="require placecholder="ราคา>
          <br></br>


        <input name="submit" type="submit" id="submit" value="เพิ่มบริการ">
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
