<?php
include('connection1.php');
session_start();
    
    $id = test_input($_POST['mentor']);
    $sid = test_input($_POST['student']);
    $query=$db->prepare("SELECT COUNT(*) AS CNT FROM assign WHERE id=?");
    $data=array($id);
    $execute=$query->execute($data);
    while($datarow=$query->fetch()){
        if($datarow['CNT']<4){
            if($id>0 && $sid>0){
                $query1=$db->prepare("INSERT INTO assign(id,sid) VALUES (?,?)");
                $data1=array($id,$sid);
                $execute1=$query1->execute($data1);
                if($execute1)
                {
                    echo 0;
                }
                else{
                    echo"something went wrong";
                }
            }else{
                echo "Input the correct values";
            }
    }else{
        echo "Cannot Insert constraint violated ";
    }
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>