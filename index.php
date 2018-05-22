<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

<title>Login</title>

</head>
<body class="login-page">
  <span class="border border-primary"></span>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-md-offset-3" align="center">

        <img class="logo" src="images/logo.png"><br><br>

        <form method="POST" action="homepage.php">
          <input  class="form-control" minlenght="3" name="username" type="username" placeholder="Name"> <br>
          <input  class="form-control" minlenght="5" name="password" type="password" placeholder="Password"> <br>
          <input  class="btn btn-success" name="Login" type="submit" value="Login"> <br><br>
        </form>
            <a href="contact.php">
            <input type="button" class="btn btn-primary" value="Request account" />
            </a>
      </div>
    </div>  
  </div>
</body>
</html>
