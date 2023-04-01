<?php
include('connection1.php');
session_start();

    $id=test_input($_POST['id']);
    $aid=test_input($_POST['aid']);
    $query=$db->prepare("SELECT COUNT(*) AS CNT FROM assign WHERE id=?");
    $data=array($id);
    $execute=$query->execute($data);
    while($datarow=$query->fetch()){
        if($datarow['CNT']>3){
            $query1=$db->prepare("DELETE FROM assign WHERE aid=?");
        $data1=array($aid);
        $execute1=$query1->execute($data1);
        if($execute1)
        {
            echo 0;
        }
        else{
            echo"something went wrong";
        }
        }else{
            echo "cannot delete constraint violated";
        }
        
    }
    


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>