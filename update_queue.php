<?php
      require 'connectdb.php';

      $booking_id = $_POST['booking_id'];
      $username = $_POST['username'];
      $license = $_POST['license'];
      $province_id = $_POST['province_id'];
      $tel = $_POST['tel'];
      $time_id = $_POST['time_id'];
      $status_id = $_POST['status_id'];


      $q = "UPDATE booking SET username='$username', license='$license', province='$province_id', tel='$tel', time_id='$time_id', status_id='$status_id' WHERE booking_id='$booking_id' ";

      $result = mysqli_query($dbcon, $q);

      if($result){
        echo "แก้ไขเรียบร้อย";
        echo "<hr>";
        echo "<a href='queue_table.php'>แสดงข้อมูลลูกค้า</a>";
      }else{
        echo "เกิดข้อผิดพลาด".mysqli_error($dbcon);
      }
mysqli_close($dbcon);
 ?>
