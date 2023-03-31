<?php
include('connection1.php');
session_start();

    $id=test_input($_POST['id']);
    
        $query=$db->prepare("DELETE FROM assign WHERE id=?");
        $data=array($id);
        $execute=$query->execute($data);
        if($execute)
        {
            echo 0;
        }
        else{
            echo"something went wrong";
        }
    


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>