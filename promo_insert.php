<?php
    require 'connectdb.php';







    
    
    $ext = pathinfo(basename($_FILES['pro_image']['name']), PATHINFO_EXTENSION);
    $new_image_name='img_'.uniqid().".".$ext;
    $image_path ="images/";
    $upload_path = $image_path.$new_image_name;
    
   $success = move_uploaded_file($_FILES['pro_image']['tmp_name'],$upload_path);
   
   if($success==FALSE) {
       echo "ไม่สามารถอัพโหลดรูปภาพได้";
       
       exit;
       
   }
   
   $pro_image = $new_image_name;
  $q = "INSERT INTO promo (pro_image)
        VALUES ('$pro_image')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo "OK";
          echo "<a href='promo.php'>แสดงข้อมูล</a>";
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
