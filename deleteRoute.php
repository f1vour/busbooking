<?php

include 'connection.php';

$ID = $_GET['id'];
$sql = " DELETE FROM `route` WHERE ID = $ID " ;
$query = mysqli_query($conn,$sql);

//header("location:adminDash.php");

echo ("<script LANGUAGE='JavaScript'>
    window.alert('Route Deleted Successfully !!!');
    window.location.href='adminDash.php';
    </script>");

?>
