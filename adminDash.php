<?php 

	session_start();


?>
<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
	
     <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
</head>
<body>
<!--
   <?php //echo "welcome:".  $_SESSION['username']; ?>
   <a href="adminLogout.php"><button class="btnHome">logout</button></a>-->

</body>
</html>




<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel of Bus Services</title>
  <!--cdn icon library -->
  <!-- Here is for Manage Routes -->
	<style type="text/css">

			body{

		 background-color: #ddeff3;

		}
		.adminTopic{
			text-align: center;
			color: #000;
			

		}

table
{
    width:99%;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:50px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid #11CAF3;
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid #11CAF3;
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid #11CAF3;
    font-size: 20px;
}
table tr td a
{
    /*background-color: rgb(255, 196, 0);*/
    color: white;
    border-radius: 5px;
    padding: 6px;
    text-decoration: none;
    margin: 10px;
    font-weight: 700;
}

table tr td button:hover
{
    padding: 5px 5px 5px 5px;
	border: 2px solid #11CAF3;
    border-radius: 7px;
    background-color: #11CAF3;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 10px;
}
.btnPolicy{

	padding: 5px 5px 5px 5px;
	border: 2px solid #11CAF3;
    border-radius: 7px;
    background-color: #11CAF3;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

	background:#11CAF3;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

}


	</style>
</head>
<body>
  <input type="checkbox" id="check">

  <label for="check">
<i class="fa fa-bars" id="btn"></i>
<i class="fa fa-times" id="cancle"></i>


  </label>
  <div class="sidebar">
<header><img src="image/P1.png">
<p><?php echo $_SESSION['username']; ?></p>
</header>
<ul>


    <li><a href="adminDash.php">Manage Routes</a></li>
    <li><a href="ManagesBuses.php">Manage Buses</a></li>
    <li><a href="BookingManage.php">Booking People</a></li>
    <li><a href="PaymentManage.php">Transaction</a></li>
    <li><a href="adminLogout.php">logout</a></li>
   

</div>



<div class="sidebar2">


		<h1 class="adminTopic">Manage Route of Buses</h1>



<?php

    
    $sqlget="SELECT * FROM route";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
    <th>Via City</th>
    <th>Destination</th>
    <th>Bus Name</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Cost</th>
    <th>Update</th>
    <th>Delete</th>
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['via_city'];
        echo "</td><td>";
        echo $row['destination'];
        echo "</td><td>";
        echo $row['bus_name'];
        echo "</td><td>";
         echo $row['departure_date'];
        echo "</td><td>";
         echo $row['departure_time'];
        echo "</td><td>";
         echo $row['cost'];
        echo "</td>";
       
          
        ?>

        <td>

        <button style="border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;">
          <a href="updateRoute.php?id=<?php echo $row['id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td><td>

        <button style = "border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;" >
          <a href="deleteRoute.php?id=<?php echo $row['id'];?>">

            Delete

        </a>
       </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>

<br>


                       <a href="Addroute.php">     <button class="btnPolicy">Add Route</button></a>



</div>

</body>
</html>