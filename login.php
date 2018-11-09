<html>
<head>
<title>LOGIN ADMIN</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
-->

<!--
<body>
<form name="form1" method="post" action="check_login.php">
Login<br>
<table border="1" style="width: 300px">
<tbody>
<tr>
    <td> &nbsp;Username</td>
      <td>
         <input name="txtUsername" type="text" id="txtUsername">
     </td>
            </tr>
             <tr>
                <td> &nbsp;Password</td>
               <td><input name="txtPassward" type="password" id="txtPassward">
            </td>
          </tr>
      </tbody>
     </table>
   <br>
             <input type="submit" name="Submit" value="Login">
</form>
</body>
-->


<body style="background:#CCC;">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-dark mt-5">
                    <div class="card-title bg-primary text-white mt-5">
                        <h3 class="text-center py-3">CARCARE</h3>
                    </div>

                    <?php
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                    <?php
                        }
                    ?>


                    <?php
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                    <?php
                        }
                    ?>

                    <div class="card-body">
                        <form action="index.php" method="post">
                            <input type="text" name="txtUsername" placeholder=" User Name" class="form-control mb-3">
                            <input type="password" name="txtPassword" placeholder=" Password" class="form-control mb-3">
                            <button class="btn btn-success mt-3" name="Login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
