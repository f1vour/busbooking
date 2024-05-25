<?php 
session_start();

  include("connection.php");
 // include("function.php");

 // $user_data = check_login($conn);

?>

<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
  <title>Booking Manage</title>
  <!--cdn icon library -->
  <!-- Here is to Manage the bookings of the people -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
  <style type="text/css">

      body{
         background-color: #ddeff3;
      /* background-image: url("image/1.jpg");
      background-position: center;
      background-size: cover;
      height: 700px;
      background-repeat: no-repeat;
      background-attachment: fixed; */

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

  /*
    background: rgb(255, 255, 255);
    text-decoration:underline;
    color:tomato;
    padding: 4px;
    border:2px solid tomato;
    transition:background-color 0.2s;*/

    padding: 5px 5px 5px 5px;
  border: 2px solid #11CAF3;
    border-radius: 7px;
    background-color: #00878E;
    color: #fff;
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

  background: #11CAF3;
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


    <h1 class="adminTopic">Booking Peoples...</h1>



<?php

    
    $sqlget="SELECT * FROM booking";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Passenger Name</th>
    <th>Tel</th>
    <th>E-mail</th>
    <th>Boarding Place</th>
    <th>His/Her Destination</th>
    <th>Update</th>
    <th>Delete</th>

    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['passenger_name'];
        echo "</td><td>";
        echo $row['telephone'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['boarding_place'];
        echo "</td><td>";
        echo $row['Your_destination'];
        echo "</td>";
       
          
        ?>

        <td>

        <button style="border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;">
          <a href="updateBooking.php?id=<?php echo $row['id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td>
         <td>

        <button style="border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;">
          <a href="deleteBooking.php?id=<?php echo $row['id'];?>">
         
          
          

          Delete

          </a>

        </button>

        </td></tr>

<?php
       }

       echo "</table>";


?>
<?php

   
          
        ?>

        







</div>

</body>
</html>