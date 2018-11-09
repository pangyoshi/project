<?php
  require 'connectdb.php';
    $q = "SELECT * FROM promo";
    $result = mysqli_query($dbcon, $q);
    ?>
    
    
    
    
    
    



<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แก้ไขโปรโมชั่น</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">


    <style>
        tabel,th,td {
            border: 1px solid black;
            border-collapse: collapse;
            }
    </style>
          
        
        
</head>

<body class="dg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">แก้ไขโปรโมชั่น</div>
        <div class="card-body">

            <table style="width:500px">
       <tr>
        
        <td>รูปโปรโมชั่นปัจจุบัน</td>
        <td>ลบ</td>
        
        
        
        
       </tr>
       <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

         ?>
         <tr>
          <td><img src="images/<?php echo $row['pro_image']; ?>" width="320px" height="180"px></td>
          <td><a href="promo_delete.php?promo_id=<?php echo $row['promo_id']; ?>">ลบ</a></td>
              
          
          

         </tr>
         <?php

            }
            mysqli_free_result($result);
            mysqli_close($dbcon);
        ?>

            
            
            </table>
            

            <form action="promo_insert.php" method="post"enctype="multipart/form-data" id="from">





                <br>
                    
          <label>กรุณาอัพโหลดภาพโปรโมชั่นของคุณ </label>
          
          


          <input name="pro_image" type="file" value="อัพโหลดภาพ">
          </br>
          </br>
          
          <input name="submit" type="submit" id="submit" value="ยืนยัน">
          
          <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
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
