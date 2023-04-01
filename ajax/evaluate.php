<?php
include('connection1.php');
session_start();
    
    $id = test_input($_POST['id']);
    $sid = test_input($_POST['sid']);
    $idea = test_input($_POST['idea']);
    $execution = test_input($_POST['execution']);
    $viva = test_input($_POST['viva']);
    $total = $idea+$execution+$viva;
    echo $id;
    
            if($id>0 && $sid>0){
                $query1=$db->prepare("INSERT INTO evaluation(id,sid,idea,execution,viva,total) VALUES (?,?,?,?,?,?)");
                $data1=array($id,$sid,$idea,$execution,$viva,$total);
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
    


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>