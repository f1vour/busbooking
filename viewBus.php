<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);

?>

<?php include("connection.php")?>



<!DOCTYPE html>
<html>
<head>
  <title>user view packages COMFY</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
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
    width:1000px;
    border-collapse: separate !important;
    margin:auto;
    /*/table-layout:fixed;/*/
    text-align:center;
    margin-top:90px;
    margin-bottom: 200px;
    background-color: rgb(255, 255, 255);
    border-radius: 10px 10px 0px 0px;

}
table th
{
    border-bottom:2px solid #11caf3;
    padding:10px 0px 10px 0px;
    font-family: "balsamiq_sansitalic" !important;
}
table tr td
{
    border-right: 2px solid #11caf3;
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid #11caf3;
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
    border: 2px solid #11caf3;
    border-radius: 7px;
    background-color: #11caf3;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 10px;
}
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid #11caf3;
    border-radius: 7px;
    background-color: #11caf3;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:#11caf3;
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
<header><img src="image/P2.png">
<p><?php echo $user_data['username'];?></p>
</header>
<ul>


    <li><a href="viewBus.php">Ticket Booking</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="logout.php">logout</a></li>
   

</div>


<div class="sidebar2">


    <h1 class="adminTopic">Booking Your Ticket...</h1>


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
    <th>Booking</th>
    
   
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

        <button style="border:2px solid #11caf3; border-radius:7px; background-color:#11caf3;color:white;">
          <a href="AddBooking.php?id=<?php echo $row['id'];?>">
         
          
          

          Book Now

          </a>

        </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>


</div>

</body>
</html>