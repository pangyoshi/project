<?php
      require 'connectdb.php';

      $quser_id = $_GET['user_id'];

      $quser = "SELECT * FROM customer WHERE user_id='$quser_id' ";

      $resuser = mysqli_query($dbcon, $quser);
      $rowuser = mysqli_fetch_array($resuser, MYSQLI_ASSOC);




?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>แก้ไขข้อมูล</title>

        <!-- Bootstrap core CSS-->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin.css" rel="stylesheet">

        <style>
            label{
                display: block;
            }
        </style>



    </head>
    <body class="dg-dark">

      <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">แก้ไขข้อมูลลูกค้า</div>
            <div class="card-body">

      <form action="member_update.php" method="post" enctype="multipart/form-data" id="form">
  <fieldset>


        <label>อีเมล์ </label><input type="text" name="email" id="email" size="40" value="<?php echo $rowuser['email']; ?>">
        <label>ชื่อลูกค้า </label><input type="text" name="username" id="username" size="40" value="<?php echo $rowuser['username']; ?>">

        <label>หมายเลขทะเบียน </label><input type="text" name="license" id="license" size="20" value="<?php echo $rowuser['license']; ?>">
        
        <label>จังหวัดตามทะเบียน</label>
        <?php
            $q = "SELECT * FROM province";
            $result = mysqli_query($dbcon, $q);
         ?>
        <select name="province_id" id="province_id">
          
          <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){

                  if ($row[0]==$rowuer['province_id']) {

                        echo "<option value='$row[0]' selected>$row[1]</option>";
                  }  else{

                    echo "<option value='$row[0]'>$row[1]</option>";
                  }


                }
          ?>


        </select>
        
        <label>หมายเลขโทรศัพท์ </label><input type="text" name="tel" id="tel" size="30" value="<?php echo $rowuser['tel'];?>">


        <input type="hidden" name="user_id" value="<?php echo $rowuser['user_id']; ?>">
        <br></br>
        <input name="submit" type="submit" id="submit" value="ตกลง">
        <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
    </fieldset>




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
