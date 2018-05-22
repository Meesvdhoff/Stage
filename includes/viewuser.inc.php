<?php

class ViewUser extends User
{

    public function showAllUsers(){
        $datas = $this->getAllUsers();
        foreach ($datas as $data)
        {
          echo $data['klantid'];"<br>"
          echo $data['username'];"<br>"
          echo $data['password'];"<br>"
        }

}
?>
