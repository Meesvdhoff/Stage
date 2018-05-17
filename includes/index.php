<?php
    include 'dbh.inc.php';
    include 'users.inc.php';
    include 'viewusers.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<title>Login</title>

</head>
<body>
<?php
    $users = new viewusers();
    $users->showAllUsers();
 ?>
</body>
</html>
