<?php
    require 'connectdb.php';
    $booking_service_id = $_GET['booking_service_id'];
    $q = "DELETE FROM booking_service WHERE booking_service_id='$booking_service_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo "ลบสำเร็จ";
      echo "<a href='queue_table.php'>ดูข้อมูล</a>";

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
