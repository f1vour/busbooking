<?php 
session_start();

 // include("connection.php");
 // include("function.php");

  //$user_data = check_login($conn);

?>

<?php include("connection.php")?>

<!DOCTYPE html>
<html>
<head>
  <title>payment received!!!</title>
  <!--cdn icon library -->
  <!-- Manage the Transactions of people that payed -->
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


    <h1 class="adminTopic">Transaction Received...</h1>



<?php

    
    $sqlget="SELECT * FROM payment";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>ID</th>
    <th>Paid Amount</th>
    <th>Paid Passenger Name</th>
    <th>E-mail</th>
    <th>address</th>
    <th>city</th>
    <th>Update/Edit</th>
    <th>Delete</th>

    
   
       </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['amount'];
        echo "</td><td>";
        echo $row['name'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        echo $row['address'];
        echo "</td><td>";
        echo $row['city'];
        echo "</td>";
      
       
          
        ?>

        <td>

        <button style="border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;">
          <a href="updateTransactionRecivied.php?id=<?php echo $row['id'];?>">
         
          
          

          Update

          </a>

        </button>

        </td>


        <td>

        <button style="border:2px solid #11CAF3; border-radius:7px; background-color:#11CAF3;color:white;">
          <a href="deleteTransactionRecivied.php?id=<?php echo $row['id'];?>">
         
          
          

          Delete

          </a>

        </button>

        </td>





      </tr>

<?php
       }

       echo "</table>";


?>
<?php

   
          
        ?>

        







</div>

</body>
</html>