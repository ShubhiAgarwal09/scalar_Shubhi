<?php
include('connection1.php');
session_start();
//if(isset($_POST['token']) && password_verify("teachertoken",$_POST['token']))

    //$class=test_input($_POST['class1']);
    $id = test_input($_POST['mentor']);
    $sid = test_input($_POST['student']);
    echo $id;
        $query=$db->prepare("INSERT INTO assign(id,sid) VALUES (?,?)");
        $data=array($id,$sid);
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