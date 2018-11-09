<?php
    require 'connectdb.php';



    if (empty ($_POST['username'])){
      echo "กรุณากรอกชื่่อ";
      exit();
    } else {

        $username = $_POST['username'];
    }



    $license = $_POST['license'];
    $tel = $_POST['tel'];
    $province_id = $_POST['province_id'];
    $time_id = $_POST['time_id'];
    $status_id = $_POST['status_id'];
    $booking_service_id = $_POST['booking_service_id'];
    $b=implode(",", $booking_service_id);
    $user_type = $_POST['user_type'];


  $q = "INSERT INTO booking (username, license, tel, province, time_id, status_id, booking_service_id, user_type)
        VALUES ('$username', '$license', '$tel', '$province_id','$time_id', '$status_id', '$b', '$user_type')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo "OK";
          echo "<a href='queue_table.php'>แสดงรายการคิว</a>";
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
