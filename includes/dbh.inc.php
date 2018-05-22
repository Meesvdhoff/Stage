<?php
class Dbh
{

  private $servername;
  private $username;
  private $password;
  private $dbname;

    protected function connect()
    {
      $this->servername = "localhost";
      $this->username = "root";
      $this->password = "";
      $this->dbname = "adwordsviewapp";

        $conn = new mysqli($this->servername,$this->username ,$this->password , $this->dbname) or die("Couldn't connect to server");

        return $conn;
    }
}
?>
