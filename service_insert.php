<?php
    require 'connectdb.php';







    $service_name = $_POST['service_name'];
    $service_price = $_POST['service_price'];

  $q = "INSERT INTO booking_service (service_name, service_price)
        VALUES ('$service_name', '$service_price')";

        $result = mysqli_query($dbcon, $q);

        if ($result) {
          echo "OK";
          echo "<a href='queue_table.php'>แสดงข้อมูล</a>";
        } else {
          echo "NO".mysqli_error($dbcon);
        }

        mysqli_close($dbcon);
 ?>
