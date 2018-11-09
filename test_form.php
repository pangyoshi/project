<?php
session_start();
      $dbcon = mysqli_connect('localhost', 'root', '', 'project') or die('ไม่สำเร็จ'.mysqli_connect_error());
      mysqli_set_charset($dbcon, 'utf8');
      $query = "SELECT * FROM booking_service ORDER BY booking_service_id ASC";
      $result = mysqli_query($dbcon, $query);
      if(isset($_POST["add_to_cart"]))
      {
           if(isset($_SESSION["service_cart"]))
           {
                $item_array_id = array_column($_SESSION["service_cart"], "item_id");
                if(!in_array($_GET["id"], $item_array_id))
                {
                     $count = count($_SESSION["service_cart"]);
                     $item_array = array(
                          'item_id'               =>     $_GET["id"],
                          'item_name'               =>     $_POST["hidden_name"],
                          'item_price'          =>     $_POST["hidden_price"],
                          'item_quantity'          =>     $_POST["quantity"]
                     );
                     $_SESSION["service_cart"][$count] = $item_array;
                }
                else
                {
                     echo '<script>alert("Item Already Added")</script>';
                     echo '<script>window.location="test_form.php"</script>';
                }
           }
           else
           {
                $item_array = array(
                     'item_id'               =>     $_GET["id"],
                     'item_name'               =>     $_POST["hidden_name"],
                     'item_price'          =>     $_POST["hidden_price"],
                     'item_quantity'          =>     $_POST["quantity"]
                );
                $_SESSION["service_cart"][0] = $item_array;
           }
      }
      if(isset($_GET["action"]))
      {
           if($_GET["action"] == "delete")
           {
                foreach($_SESSION["service_cart"] as $keys => $values)
                {
                     if($values["item_id"] == $_GET["id"])
                     {
                          unset($_SESSION["service_cart"][$keys]);
                          echo '<script>alert("Item Removed")</script>';
                          echo '<script>window.location="test_form.php"</script>';
                     }
                }
           }
      }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>service test</title>

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
   <br>
   <div class="container" style="width:700px">
     <h3 align="center">บริการ</h3>
     <br>
     <?php

     if(mysqli_num_rows($result) > 0)
     {
          while($row = mysqli_fetch_array($result))
          {
     ?>
     <div class="col-md-4">
          <form method="post" action="test_form.php?action=add&id=<?php echo $row["booking_service_id"]; ?>">
               <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">

                    <h4 class="text"><?php echo $row["service_name"]; ?></h4>
                    <h4 class="text">฿ <?php echo $row["service_price"]; ?></h4>
                    <input type="hidden" name="quantity" class="form-control" value="1" />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["service_name"]; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["service_price"]; ?>" />
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
               </div>
          </form>
     </div>
     <?php
          }
     }
     ?>





     <div style="clear:both"></div>
     <br />
     <h3>Order Details</h3>
     <div class="table-responsive">
          <table class="table table-bordered">
               <tr>
                    <th width="40%">บริการ</th>

                    <th width="20%">ราคา</th>

                    <th width="5%">Action</th>
               </tr>
               <?php
               if(!empty($_SESSION["service_cart"]))
               {
                    $total = 0;
                    foreach($_SESSION["service_cart"] as $keys => $values)
                    {
               ?>
               <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td>฿ <?php echo $values["item_price"]; ?></td>

                    <td><a href="test_form.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">ลบ</span></a></td>
               </tr>
               <?php
                         $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    }
               ?>
               <tr>
                    <td colspan="2" align="right">Total</td>
                    <td align="right">฿ <?php echo number_format($total, 2); ?></td>

               </tr>
               <?php
               }
               ?>
          </table>
     </div>

   </body>
 </html>
