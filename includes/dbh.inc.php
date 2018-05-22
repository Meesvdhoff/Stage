<?php
class Dbh
{

  private $dbservername;
  private $dbusername;
  private $dbpassword;
  private $dbname;

    protected function connect()
    {
      $this->dbservername = "localhost";
      $this->dbusername = "root";
      $this->dbpassword = "";
      $this->dbname = "adwordsviewapp";

        $conn = new mysqli($this->servername,$this->username ,$this->password , $this->dbname) or die("Couldn't connect to server");

        return $conn;
    }
}
