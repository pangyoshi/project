<?php
      require 'connectdb.php';

      $booking_id = $_GET['booking_id'];

      $qbook = "SELECT * FROM booking LEFT JOIN province ON booking.province=province.province_id LEFT JOIN booking_time ON booking.time_id=booking_time.time_id  WHERE booking_id='$booking_id' ";

      $resbook = mysqli_query($dbcon, $qbook);
      $rowbook = mysqli_fetch_array($resbook, MYSQLI_ASSOC);

        
        
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>แก้ไขข้อมูล</title>

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
    <body class="dg-dark">

      <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">แก้ไขข้อมูล</div>
            <div class="card-body">
      <form action="update_queue.php" method="post" enctype="multipart/form-data" id="form">
          <fieldset>



        <label>ชื่อลูกค้า </label><input type="text" name="username" id="username" size="40" value="<?php echo $rowbook['username']; ?>">
        <label>หมายเลขทะเบียน </label><input type="text" name="license" id="license" size="20" value="<?php echo $rowbook['license']; ?>">
        <label>จังหวัดตามทะเบียน</label>
        <?php
            $q = "SELECT * FROM province";
            $result = mysqli_query($dbcon, $q);
         ?>
        <select name="province_id" id="province_id">
          <option value="">---เลือกจังหวัด----</option>
          <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){

                  if ($row['0']==$rowbook['booking_id']) {

                        echo "<option value='$row[0]' selected>$row[1]</option>";
                  }  else{

                    echo "<option value='$row[0]'>$row[1]</option>";
                  }


                }
          ?>


        </select>



        <label>หมายเลขโทรศัพท์ </label><input type="text" name="tel" id="tel" size="40" value="<?php echo $rowbook['tel']; ?>">



       <label>เวลา </label>
        <?php
            $q = "SELECT * FROM booking_time";
            $result = mysqli_query($dbcon, $q);
         ?>
        <select name="time_id" id="time_id">
          <option value="<?php echo $rowbook['time_id']; ?>"><?php echo $rowbook['time']; ?></option>
          <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
                  if ($row['0']==$rowbook['booking_id']) {
                        echo "<option value='$row[0]' selected>$row[1]</option>";
                  }  else{
                    echo "<option value='$row[0]'>$row[1]</option>";
                  }
                }
          ?>


        </select>





        <label>สถานะ</label>
        <label>
          <input type="radio" name="status_id" value="1" id="status_id_1" <?php if($rowbook['status_id']=='1') echo "checked";?>>รอรับบริการ</label>
        <label>
          <input type="radio" name="status_id" value="2" id="status_id_2" <?php if($rowbook['status_id']=='2') echo "checked";?>>กำลังใช้บริการ</label>
        <label>
            <input type="radio" name="status_id" value="3" id="status_id_3" <?php if($rowbook['status_id']=='3') echo "checked";?>>เสร็จสิ้น</label>






        <label>ประเภทรับบริการ</label>
       <label>
                <input type="checkbox" name="booking_service_id[]" value="ล้าง อัด ฉีด">ล้าง อัด ฉีด &nbsp &nbsp
            
                <input type="checkbox" name="booking_service_id[]" value="ล้างห้องเครื่อง">ล้างห้องเครื่อง </label>
            <label>
                <input type="checkbox" name="booking_service_id[]" value="ดูดฝุ่น">ดูดฝุ่น &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            
                <input type="checkbox" name="booking_service_id[]" value="เคลือบยาง">เคลือบยาง</label>

        <input type="hidden" name="booking_id" value="<?php echo $rowbook['booking_id']; ?>">
        <input name="submit" type="submit" id="submit" value="ตกลง">
        <input type=button onClick='window.history.back()' value='ย้อนกลับ'>
      </fieldset>
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
