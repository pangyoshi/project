<?php
    require 'connectdb.php';

    $type = "1";


?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เพิ่มรายการคิว</title>

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

<body>

  <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">เพิ่มคิวล้างรถ</div>
        <div class="card-body">
  <form action="queue_walkin_insert.php" method="post"enctype="multipart/form-data" id="from">
      <fieldset>






          <label>ชื่อลูกค้า: </label><input type="text" name="username" id="username" size="40">
          <label>หมายเลขทะเบียน: </label><input type="text" name="license" id="license" size="20">
          <label>จังหวัดตามทะเบียน</label>
          <?php
              $q = "SELECT * FROM province";
              $result = mysqli_query($dbcon, $q);
           ?>
          <select name="province_id" id="province_id">
            <option value="">---เลือกจังหวัด----</option>
            <?php
                  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                    echo "<option value='$row[0]'>$row[1]</option>";
                  }
            ?>
          </select>



          <label>โทร: </label><input type="text" name="tel" id="tel" size="40">




         <!--label>วันที่  </label> <input name "dateadd" type="date" id="dateadd">-->
          <label>เวลา </label>
          <?php
              $q = "SELECT * FROM booking_time";
              $result = mysqli_query($dbcon, $q);
           ?>
          <select name="time_id" id="time_id">
            <option value="">---เลือกเวลา----</option>
            <?php
                  while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                    echo "<option value='$row[0]'>$row[1]</option>";
                  }
            ?>
          </select>



          <label>สถานะ</label>
          <label>
            <input type="radio" name="status_id" value="1" id="status_id_1">รอรับบริการ</label>
          <label>
            <input type="radio" name="status_id" value="2" id="status_id_2">กำลังใช้บริการ</label>
          <label>
            <input type="radio" name="status_id" value="3" id="status_id_3">เสร็จสิ้น</label>








            <label>ประเภทบริการ</label>
            <label>
                <input type="checkbox" name="booking_service_id[]" value="ล้าง อัด ฉีด">ล้าง อัด ฉีด &nbsp &nbsp
            
                <input type="checkbox" name="booking_service_id[]" value="ล้างห้องเครื่อง">ล้างห้องเครื่อง </label>
            <label>
                <input type="checkbox" name="booking_service_id[]" value="ดูดฝุ่น">ดูดฝุ่น &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            
                <input type="checkbox" name="booking_service_id[]" value="เคลือบยาง">เคลือบยาง</label>




            <input type="hidden" name="user_type" id="user_type" value="1">

          <input name="submit" type="submit" id="submit" value="ตกลง">
          <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
          
      </fieldset>
    </form>

  </div>
</div>
</div>
</body>

</html>
