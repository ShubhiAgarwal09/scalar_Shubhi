<?php
include('connection1.php');
session_start();
        $query=$db->prepare('SELECT mentorlist.email as memail,studentlist.email as smail,idea,execution,viva,total FROM evaluation JOIN mentorlist ON evaluation.id=mentorlist.id JOIN studentlist ON studentlist.sid= evaluation.sid  ');

        $data=array();

        $execute=$query->execute($data);
?>
<table class= "table table-hover table-bordered" style="border: 1px solid; border-botton:1px solid">
    <tr>
        <td>Mentor Id</td>
        <td>Student Id</td>
        <td>Idea</td>
        <td>Execution</td>
        <td>Viva</td>
        <td>total</td>
    </tr>
    <?php
    $srno=1;
        while($datarow=$query->fetch())
        {
    ?>
    <tr>
        
        <td><?php echo $datarow['memail'];?></td>
        <td><?php echo $datarow['smail'] ?></td>
        <td><?php echo $datarow['idea'] ?></td>
        <td><?php echo $datarow['execution'] ?></td>
        <td><?php echo $datarow['viva'] ?></td>
        <td><?php echo $datarow['total'] ?></td>
        <td><button onclick="deleted('<?php echo $datarow['id'] ?>','<?php echo $datarow['aid']?>');" class="btn btn-danger" >Delete</button></td>
    </tr>
<?php
$srno++;
    } 
?>
    </table>
<?php
    
?>