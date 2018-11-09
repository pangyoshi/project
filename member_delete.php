<?php
  require 'connectdb.php'
  $user_id = $_GET['user_id'];
  $q = "DELETE FROM customer WHERE user_id='$user_id'";
  $result = mysqli_query($dbcon, $q);
  if($result){

    echo "<a href='member_table.php>แสดงข้อมูล</a>'";
  }else {
    echo "ผิดพลาด".mysqli_error($dbcon);
  }

 ?>
