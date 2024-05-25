<?php 
session_start();

  include("connection.php");
  include("function.php");

  $user_data = check_login($conn);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="cssfile/payment.css">
    <link rel="stylesheet" href="cssfile/nav.css">
</head>
<body>
    
<?php include("nav.php");

?>

<?php



  if(isset($_POST['checkout'])){


     $name=$_POST['name'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $zip=$_POST['zip'];
     $cname=$_POST['cardName'];
     $cnumber=$_POST['cardNumber'];
     $expM=$_POST['expM'];
     $expY=$_POST['expYear'];
     $cvv=$_POST['cvv'];
     $amount=$_POST['amount'];


       if($conn->connect_error)
          {
            die('Connection Failed :'.$conn->connect_error);
          }
          else
          {


              $stmt=$conn->prepare("INSERT INTO payment(amount,name,email,address,city,state,zip_code,card_name,card_number,exp_month,exp_year,cvv) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
              //table3 is the table name//

              $stmt->bind_param("isssssissssi",$amount,$name,$email,$address,$city,$state,$zip,$cname,$cnumber, $expM,$expY,$cvv);

              $stmt->execute();
                          
                           echo ("<script LANGUAGE='JavaScript'>
                window.alert('Successfully added!!!');
                window.location.href='paySucess.php';
                </script>");

              
              $stmt->close();
              $conn->close();
              }
                
          
      }     
  

   ?>


<div class="container">

    <form method="POST">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                 <div class="inputBox">
                    <span>Amount You Pay :</span>
                    <input type="number" value="500" name="amount" readonly>
                </div>

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" value="<?php echo $user_data['username'];?>" name="name" readonly>
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" value="<?php echo $user_data['email'];?>" name="email" readonly>
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" value="<?php echo $user_data['address'];?>" name="address" readonly>         
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="Lugbe" value="<?php echo $user_data['city'];?>" name="city" readonly>
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>State :</span>
                        <input type="text" placeholder="Abuja" value="<?php echo $user_data['state'];?>" name="state" required>
                    </div>
                    <div class="inputBox">
                        <span>Zip code :</span>
                        <input type="text" placeholder="123 456" value="<?php echo $user_data['zip_code'];?>" name="zip" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="CardName" name="cardName" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" name="cardNumber" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="January" name="expM" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" name="expYear" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="123" name="cvv" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn" name="checkout">

    </form>

</div>    
    <!-- TODO: Add this also for printing of the data collected -->
</body>
</html>