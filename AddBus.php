<?php 

    session_start();

?>
<?php include("connection.php")?>


<!DOCTYPE html>
<html>
<head>
  <title>Routes adding</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
    <style type="text/css">

            body{

          background-color: #ddeff3;

        }
        .adminTopic{
            text-align: center;
            color: #000;
            

        }
    .form_wrap .submit_btn:hover{

      color:#fff;
      font-weight: 600;

    }
    .idclass{

      width: 100%;
      border-radius: 3px;
      border: 1px solid #9597a6;
      padding: 10px;
      outline: none;
      color: black;

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


        <?php 


  if(isset($_POST['AddBus'])){

     
       //$id=$_POST['id'];
       $nameOFbus=$_POST['bus_name'];
       $tel=$_POST['tel'];
       
    

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO bus(Bus_Name,Tel) VALUES(?,?)");
              //table3 is the table name//

              $stmt->bind_param("ss", $nameOFbus,$tel);

              $stmt->execute();
              
                                 echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Successfully Bus Added!!!');
                      window.location.href='ManagesBuses.php';
                      </script>");
               


              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>




          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Bus adding
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        
        <div class="input_wrap">
          <label for="title">Bus Name</label>
          <input type="text" id="title" name="bus_name" placeholder="Bus Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

        <div class="input_wrap">
          <input type="submit" value="Add Bus Now" class="submit_btn" name="AddBus">

        </div>



      </div>
    </form>
  </div>
</div>




</div>

</body>
</html>