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
  <title>booking page</title>
  <!--cdn icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="cssfile/sidebar.css">
<link rel="stylesheet" href="cssfile/signUp.css">
<link rel="stylesheet" href="cssfile/nav.css">
  <style type="text/css">

      body{
       
        background-color: #ddeff3;
      /* background-image: url("image/2.jpg");
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
    border: 2px solid #11caf3;
    border-radius: 7px;
    background-color: #00878e;
    color: white;
    cursor: pointer;
}
button 
{
    padding: 10px;
}
.btnPolicy{

  padding: 5px 5px 5px 5px;
  border: 2px solid #00878e;
    border-radius: 7px;
    background-color: #00878e;
    color: white;
    margin-left: 20px;
}

.btnPolicy:hover{

  background:#15afd2;
    padding: 7px 7px 7px 7px;
    cursor: pointer;

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
<?php include("nav.php");

?>

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


    <h1 class="adminTopic">Get Your Ticket...</h1>


<?php



       


  if(isset($_POST['AddBooking'])){


     $passenger=$_POST['passenger_name'];
     $tel=$_POST['tel'];
     $email=$_POST['email'];
     $board_place=$_POST['board_place'];
     $desti=$_POST['Your_destination'];
    

    


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO booking(passenger_name,telephone,email,boarding_place,Your_destination) VALUES(?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("sssss",$passenger,$tel,$email,$board_place,$desti);

              $stmt->execute();
              
                         echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully added!!!');
                window.location.href='AddPay.php';
                </script>");
              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>





   
          

          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
    Getting A Ticket...
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        
        <div class="input_wrap">
          <label for="title">Passenger Name</label>
          <input type="text" id="title" name="passenger_name" placeholder="Passenger Name" required>
        </div>


        <div class="input_wrap">
          <label for="title">Telephone</label>
          <input type="text" id="title" name="tel" placeholder="Tel" required>
        </div>

        <div class="input_wrap">
          <label for="title">E-mail</label>
          <input type="E-mail" id="title" name="email" placeholder="E-mail" class="idclass" required>
        </div>

        <div class="input_wrap">
          <label for="title">Board Place</label>
          <input type="text" id="title" name="board_place" placeholder="board place" required>
        </div>

        <div class="input_wrap">
          <label for="title">Your destination</label>
          <input type="text" id="title" name="Your_destination" placeholder="Your destination" required>
        </div>


        <div class="input_wrap">
          <input type="submit" value="Booking Now" class="submit_btn" name="AddBooking">

        </div>

<!-- TODO: add the code here for downloading the tickets. -->

      </div>
    </form>
  </div>
</div>


        







</div>

</body>
</html>