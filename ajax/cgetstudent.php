<?php
include('connection1.php');
session_start();
{
        $query=$db->prepare('SELECT * FROM studentlist');

        $data=array();

        $execute=$query->execute($data);
?>
<select name="student" id="student" class="form-control" >
<option value="0">Select Student</option>
    <?php
        while($datarow=$query->fetch())
        {
    ?>
    <option value="<?php echo $datarow['sid'];?>"><?php echo $datarow['name']?></option>
    <?php } ?>
</select>
<?php

    }

?>