<?php
    dirname('includes/dbh.inc.php');
    dirname('includes/users.inc.php');
    include_once "includes/viewuser.inc.php";
 ?>

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
        $users = new ViewUser();
        $users->showAllUsers();
     ?>

</div>
</body>
</html>
