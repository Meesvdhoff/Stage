<?php
Class User extends dbh {


    protected function showAllUsers(){
        $datas = $this->getAllUsers();
        foreach ($datas as $data)
        {
          echo $data['klantid'];"<br>"
          echo $data['username'];"<br>"
        }
}
?>
