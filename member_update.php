<?php
       require 'connectdb.php';
        
       
        
      $username = $_POST['username'];
      $license = $_POST['license'];
      $province_id = $_POST['province_id'];
      $tel = $_POST['tel'];


$q = "UPDATE customer SET username='$username', license='$license', province='$province_id', tel='$tel'";


    $result = mysqli_query($dbcon, $q);
    
     if($result){
        echo "แก้ไขเรียบร้อย";
        echo "<hr>";
        echo "<a href='member_table.php'>กลับไปยังหน้าข้อมูลลูกค้า</a>";
      }else{
        echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
      }
mysqli_close($dbcon);
 ?>