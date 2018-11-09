<?php
    require 'connectdb.php';
    $booking_id = $_GET['booking_id'];
    $q = "DELETE FROM booking WHERE booking_id='$booking_id'";
    $result = mysqli_query($dbcon, $q);

    if($result){
      echo "ลบสำเร็จ";
      echo "<a href='queue_table.php'>ดูข้อมูล</a>";

    }else {
       echo "ผิดพลาด".mysqli_error($dbcon);

    }
    mysqli_close($dbcon);
 ?>
