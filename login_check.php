


<?php
	session_start();
  require 'connectdb.php';
	$strSQL = "SELECT * FROM admin WHERE admin = '".mysqli_real_escape_string($dbcon,$_POST['txtUsername'])."'
  and password = '".mysqli_real_escape_string($dbcon,$_POST['txtPassword'])."' ";
	$objQuery = mysqli_query($dbcon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username หรือ Password ไม่ถูกต้อง!";
      echo"<a href='login.php'>ลองอีกครั้ง</a>";

	}
	else
	{
		//	$_SESSION["admin_id"] = $objResult["admin_id"];
			$_SESSION["admin_status"] = $objResult["admin_status"];

			session_write_close();

			if($objResult["admin_status"] == "ADMIN")
			{
				header("location:queue_table.php");
			}

	}
	mysqli_close($dbcon);
?>
