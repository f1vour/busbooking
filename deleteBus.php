<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `bus` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Bus Deleted Successfully !!!');
    window.location.href='ManagesBuses.php';
    </script>");

?>
