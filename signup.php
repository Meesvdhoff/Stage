<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

<title>Signup</title>

</head>
<body class="home-page">
  <span class="border border-primary"></span>
  <div class="container">
    <h1>  Signup Form </h1>
    <form class="signup-form" action="" method="POST">
      <input type="text" name="first" placeholder="First"/><br>
      <input type="text" name="last" placeholder="Last"/><br>
      <input type="text" name="email" placeholder="E-mail"/><br>
      <input type="text" name="kid" placeholder="Klantid"/><br>
      <input type="text" name="uid" placeholder="Username"/><br>
      <input type="password" name="pwd" placeholder="Password"/><br>
      <button class="signup" type="submit" name="submit"/>Sign up</button><br>
    </form>

   <?php

   require_once "includes/CreateUser.inc.php";
   $signup = new Signup();

   if (isset($_POST))
   {
     echo $signup->CreateUser($_POST);
   }

   

   ?>
   
</div>
</body>
</html>
