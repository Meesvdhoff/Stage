
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

            $conn = new mysqli($this->dbservername,$this->dbusername ,$this->dbpassword , $this->dbname) or die("Couldn't connect to server");

            return $conn;

      }

  }
