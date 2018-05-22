<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

<title>Users</title>

</head>
<body class="home-page">
  <span class="border border-primary"></span>
  <div class="container">

    <?php
     $input = "test123";
     $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);

     echo password_verify($input, $hashedPwdInDb);
    ?>
</div>
</body>
</html>
