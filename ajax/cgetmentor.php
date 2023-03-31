<?php
include('connection1.php');
session_start();

        $query=$db->prepare('SELECT * FROM mentorlist');

        $data=array();

        $execute=$query->execute($data);
?>
<select name="mentor" id="mentor" class="form-control" >
<option value="0">Select Mentor</option>
    <?php
        while($datarow=$query->fetch())
        {
    ?>
    <option value="<?php echo $datarow['id'];?>"><?php echo $datarow['name']?></option>
    <?php } ?>
</select>
<?php
?>

