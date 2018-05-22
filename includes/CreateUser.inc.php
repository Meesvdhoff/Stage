<?php

class CreateUser extends User
{

    public function CreateUser()
    {
        if (isset($_POST['submit']))
        {
          include_once 'dbh.inc.php';

          $first = mysqli_real_escape_string($conn, $_POST['klantid']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $username = mysqli_real_escape_string($conn, $_POST['username']);
          $password = mysqli_real_escape_string($conn, $_POST['password']);


          /* Fouten opvangen met Error Handlers*/
          //check of er lege velden zijn.
          if (empty($email)  || empty($email) || empty($username) || empty($password))
          {
            echo "Vul alle gegevens in!";
            exit();
          }

          else
          {
            //check of de Characters kloppen
            if (!preg_match("/^[a-zA-Z]*$", $klantid) || !preg_match("/^[a-zA-Z]*$", $email) ) {
              // code...
            }
            else {
              //Check if email is Valid
              if (!filter_var($email, FILTER_VALIDATE_EMAIL))
              {
                // code...
              }
            }
          }

        }
    }

}
