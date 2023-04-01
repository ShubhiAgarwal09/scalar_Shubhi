<?php
include('connection1.php');
session_start();

        $id =$_POST['id'];

        $query=$db->prepare('SELECT * FROM assign WHERE id = ?');

        $data=array($id);

        $execute=$query->execute($data);
?>
<select name="class" id="class" class="form-control">
<option value="0">Select student id</option>
    <?php
        while($datarow=$query->fetch())
        {
    ?>
    <option value="<?php echo $datarow['sid'];?>"><?php echo $datarow['sid']?></option>
    <?php } ?>
</select>
