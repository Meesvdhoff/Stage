<?php
include_once "users.inc.php";


class ViewUser extends User
{

    public function showAllUsers()
    {
    $datas = $this->getAllUsers();
        foreach ($datas as $data)
        {
            echo $data['klantid'];
            echo $data['username'];
            echo $data['password'];
        }
     }
  }
