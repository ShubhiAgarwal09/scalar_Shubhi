<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sde_scalar_shubhi";

    $db = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
   
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

?>