<?php
include('connection1.php');
session_start();
        $query=$db->prepare('SELECT * FROM assign  ');

        $data=array();

        $execute=$query->execute($data);
?>
<table class= "table table-hover table-bordered">
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
        <td><button onclick="deleted(this.value);" class="btn btn-danger" value="<?php echo $datarow['id']?>">Delete</button></td>
    </tr>
<?php
$srno++;
    } 
?>
    </table>
<?php
    
?>