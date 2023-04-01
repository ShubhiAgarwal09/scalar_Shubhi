<?php
include('connection1.php');
session_start();
        $query=$db->prepare('SELECT * FROM assign  ');

        $data=array();

        $execute=$query->execute($data);
?>
<table class= "table table-hover table-bordered" style="border: 1px solid; border-botton:1px solid">
    <tr>
        <td>Mentor Id</td>
        <td>Student Id</td>
    </tr>
    <?php
    $srno=1;
        while($datarow=$query->fetch())
        {
    ?>
    <tr>
        
        <td><?php echo $datarow['id'];?></td>
        <td><?php echo $datarow['sid'] ?></td>
        <td><button onclick="deleted('<?php echo $datarow['id'] ?>','<?php echo $datarow['aid']?>');" class="btn btn-danger" >Delete</button></td>
    </tr>
<?php
$srno++;
    } 
?>
    </table>
<?php
    
?>