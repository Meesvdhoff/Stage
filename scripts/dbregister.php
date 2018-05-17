<?php
include('dbconnect.php');
      $msgpass = "";
      getconnection();
      echo $conn();
      echo phpinfo();

      if (isset($_POST['submit']))
      {

        $name =$conn->real_escape_string($_POST['name']);
        $password =$conn->real_escape_string($_POST['password']);
        $cPassword =$conn->real_escape_string($_POST['cPassword']);

        if ($password != $cPassword)
        $msgpass = "please Check your Passwords!";

        else {
            $hash = password_hash($password, algo:PASSWORD_BCRYPT);


        }


      }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<title>Register</title>

</head>
<body>
  <span class="border border-primary"></span>
  <div class="container" style="margin-top: 100px; ">
    <div class="row justify-content-center">
      <div class="col-md-6 col-md-offset-3" align="center">
        <?php if ($msgpass != "") echo $msgpass . "<br><br>" ?>
        <img src="../images/logo.png"><br><br>

        <form method="post" action="register.php">
          <input  class="form-control" minlenght="3" name="username" type="username" placeholder="Name"> <br>
          <input  class="form-control" minlenght="5" name="password" type="password" placeholder="Password"> <br>
          <input  class="form-control" minlenght="5" name="cPassword" type="password" placeholder="Confirm Password"> <br>
          <input  class="btn btn-primary" name="submit" type="submit" value="Register"> <br>

</div>
</div>
</body>
</html>
