<?php
include_once "users.inc.php";

  class Signup extends User
  {


    public function CreateUser()
    {
        if (isset($_POST['submit']))
        {

          $first = mysqli_real_escape_string($conn, $_POST['first']);
          $last = mysqli_real_escape_string($conn, $_POST['last']);
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $klantid = mysqli_real_escape_string($conn, $_POST['klantid']);
          $uid = mysqli_real_escape_string($conn, $_POST['uid']);
          $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


          /* Fouten opvangen met Error Handlers*/
          //check of er lege velden zijn.
          if (empty($first)  || empty($last) || empty($email) || empty($klantid) || empty($uid) || empty($pwd))
          {
            echo "Vul alle gegevens in!";
            exit();
          }
          else
          {
            //check of de Characters kloppen
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) )
            {
              echo "Please check your name";
              exit();
            }
            else
            {
              //Check of de email klopt
              if (!filter_var($email, FILTER_VALIDATE_EMAIL))
              {
                echo "wrong email";
                exit();
              }
              else
              {
                $sql = "SELECT * FROM users WHERE username='$uid'";
                $result = mysqli_query($conn, $sql);
                $resulCheck = mysqli_num_rows($result);

                if ($resultCheck > 0)
                {
                  echo "User already taken";
                  exit();
                }
                else
                {
                  //Hier hash ik het wachtwoord
                  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                  //voeg de user in de database
                  $sql = "INSERT INTO users (first, last, email, klantid, username, password) VALUES ('$first','$last','$email','$uid','$hashedPwd')";
                  mysqli_query($conn, $sql);

                  echo "User has been created";
                  exit();
                }
              }
            }
          }

        }
    }

}
