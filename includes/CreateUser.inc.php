<?php
    include_once 'dbh.inc.php';

  class Signup extends Dbh
  {
    public function CreateUser($data)
    {

      $conn = $this->connect();

          $first = mysqli_real_escape_string($conn, $data['first']);
          $last = mysqli_real_escape_string($conn, $data['last']);
          $email = mysqli_real_escape_string($conn, $data['email']);
          $kid = mysqli_real_escape_string($conn, $data['kid']);
          $uid = mysqli_real_escape_string($conn, $data['uid']);
          $pwd = mysqli_real_escape_string($conn, $data['pwd']);
        
          /* Fouten opvangen met Error Handlers*/
          //check of er lege velden zijn.
          if (empty($first) || empty($last) || empty($email) || empty($klantid) || empty($uid) || empty($pwd))
          {
            return "Insert data!";
            exit();
          }
          else
          {
            //check of de Characters kloppen
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) )
            {
              return "Please check your name";
              exit();
            }
            else
            {
              //Check of de email klopt
              if (!filter_var($email, FILTER_VALIDATE_EMAIL))
              {
                return "wrong email";
                exit();
              }
              //als alles klopt check of er al zo'n gebruiker bestaat
              else
              {
                $sql = "SELECT * FROM users WHERE klantid='$kid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0)
                {
                  return "User already taken";
                }
                else
                {
                  echo "test";
                  //hash het wachtwoord
                  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                  //voeg de user in de database
                  $sql = "INSERT INTO users (first, last, email, klantid, username, password) VALUES ('$first','$last','$email','$kid','$uid','$hashedPwd')";
                  mysqli_query($conn, $sql);
                
                  return "User has been created";
                }
              }
            }
          }
        }
    }

