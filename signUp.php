


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMFY TRAVEL SERVICES</title>
    <link rel="stylesheet" href="cssfile/nav.css">
  <!--  <link rel="stylesheet" href="cssfile/footer_l.css">-->
     <link rel="stylesheet" href="cssfile/signUp.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">

     
body{
  background-color: #fff;
  /* background-image: url(image/8.jpg);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover; */

}
.confirm{

    background-color: black;
    margin-top: 5px;


}
.error {
  color: red;
}
</style>

  </head>
  <body>

              <!--this is the header calling(nav bar)-->

            <?php include("nav.php");
             ?>

<div class="confirm">

<?php

session_start();

  include("connection.php");
  include("function.php");


  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
   
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $password = $_POST['password'];
    $con_pass=$_POST['cpassword'];


   // echo $user_name;


    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        

       if($password==$con_pass){

        
        //   $password=md5($password);//

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,First_Name,Last_Name,username,email,address,city,state,zip_code,password) values ('$user_id','$fname','$lname','$user_name','$email','$address','$city','$state','$zip','$password')";

            mysqli_query($conn,$query);

            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sign Up Successful!!!');
    window.location.href='Login.php';
    </script>");

        }
        else{

             echo "Please enter confirm password as previous one!!";

          }
    }
    else{
    
         echo "Please enter some valid information!";

      }
  }
  
?>

<!-- <?php

$emailErr = ""; // Variable to store error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);

  // Check if email is empty
  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
    // Check if email is valid format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>  -->

</div>

         


          <div class="wrapper">
  <div class="registration_form">
    <div class="title">
      Sign Up for Comfy Travel Bus Service
    </div>

    <form action="#" method="POST">
      <div class="form_wrap">
        <div class="input_grp">
          <div class="input_wrap">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="First Name" required>
          </div>
          <div class="input_wrap">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Last Name" required>
          </div>
        </div>
        <div class="input_wrap">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please enter a valid email address"> 
          <!-- <span class="error">* (format: example@domain.com)</span> -->
        </div>
        <div class="input_wrap">
          <label for="uname">Username</label>
          <input type="text" id="uname" name="user_name" placeholder="Username" required>
        </div>
        <div class="input_wrap inputBox">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" required>         
        </div>
        <div class="input_wrap inputBox">
          <label for="city">City</label>
          <input type="text" placeholder="Lugbe" name="city" id="city" required>
        </div>
        <div class="flex">
          <div class="input_wrap inputBox">
            <label for="state">State</label>
            <input type="text" placeholder="Abuja" name="state" id="state" required>
          </div>
          <div class="input_wrap inputBox">
            <label for="zip">Zip code</label>
            <input type="text" placeholder="123 456" name="zip" id="zip" required>
          </div>
        </div>
        <div class="input_wrap">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="password" required>
        </div>
        <div class="input_wrap">
          <label for="Confirm_password">Confirm Password</label>
          <input type="password" id="password" name="cpassword" placeholder="password" required>
        </div>
       
        <div class="input_wrap">
          <input type="submit" value="Register Now" class="submit_btn">
        </div>

      </div>
    </form>
  </div>
</div>

  </body>
</html>
