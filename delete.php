<?php
include 'connecton.php';
$delete=$_GET['delete_id'];
mysqli_query($conn,"delete from registration where id='$delete'");
header('location:viewtab.php');
?>