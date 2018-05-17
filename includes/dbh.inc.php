<?php
Class dbh{

  private $host;
  private $user;
  private $pass;
  private $dbname;

    protected function connect(){

      $this->host = "localhost";
      $this->user = "root";
      $this->pass = "";
      $this->dbname = "adwordsviewapp";

        $conn = new mysqli($this->host,$this->user ,$this->pass , $this->adwordsviewapp) or die("Couldn't connect to server");

        return $conn;
    }
}
?>
