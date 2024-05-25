
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About Us</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
    <link rel="stylesheet" href="cssfile/footer_l.css">
    <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
    <link rel="stylesheet" href="cssfile/login.css">
    <link rel="stylesheet" a href="css\font-awesome.min.css">
   
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    


    <style type="text/css">


       body{
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-color: #fff;
                

            }
            .sign_up{

                font-size: 20px;

            }
            .sign_up:hover{

                background-color: #fff;
                

            }
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.about-sec{
    display: flex;
    padding: 3rem 0;
    width: 100%;
    justify-content: center;
  /*  background: #2c3e50;*/
  background: rgba(1, 2, 2, 0.5);
    margin-top: 106px;
}
.about-img{
    width: 300px;
    height: 250px;
    margin: 0 3rem;
}
.about-img img{
    height: 100%;
    width: 100%;
}
.about-intro{
    color: #fff;
    width: 400px;
    height: 250px;
    border-left: 3px solid #11caf3;
    padding-left: 2rem;
    margin: 0 3rem;
}
.about-intro p{
    margin-top: 1.5rem;
    font-size: 14px;
    opacity: .7;
}
@media only screen and (max-width: 900px) {
    .about-sec{
        flex-direction: column;
        align-items: center;
    }
    .about-img{
        width: 80%;
    }
    .about-intro{
        width: 100%;
        height: 100%;
        border-top: 3px solid #fff;
        border-left: none;
        padding: 1rem;
        margin-top: 2rem;
    }
    .about-intro h3,p{
        width: 80%;
    }
    .about-intro p{
        font-size: 12px;
        color: #fff;
    }




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
    color: black;
}
table tr td
{
    border-right: 2px solid #11caf3;
    border-left: 2px solid #11caf3;
    height: 58px;
    padding: 22px 0px 0px 0px;
    font-family: "monospace;" !important;
    border-bottom: 2px solid #11caf3;
    font-size: 22px;
    color: black;
}
table tr td a
{
    background-color: rgb(255, 196, 0);
    color: black;
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
.topic_bus{
    margin-top: 100px;
    /* margin-bottom: 10px; */
    text-align: center;
    color: #000;
}


     

      
    </style>

  </head>
  <body>




              <!--this is the header calling(nav bar)-->
            <?php include("nav.php");
             ?>

             <div class="about-sec">
        <div class="about-img">
            <img src="image/16.jpg">
        </div>
        <div class="about-intro">
            <h3>About Us<span style="color: #11caf3;"> !</h3>
            <p>We, Comfy Travels (Pvt) Ltd. who is pioneer of Online Bus Ticket Booking Service in Abuja Nigeria since 2024. In this segment the company has launch a web site www.ComfyTravels with the collaboration of BRT registered Buses in Abuja Nigeria.</p>
        </div>
    </div>




<?php include("connection.php");?>

<h1 class="topic_bus"> ...Our Buses...</h1>

<?php

    
    $sqlget="SELECT * FROM bus";
    $sqldata=mysqli_query($conn,$sqlget) or die('error getting');
    

    echo "<table>";
    echo "<tr>
      <th>bus_name</th>
      <th>Tel Number</th>
      </tr>";

       while ($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
       {
        echo "<tr><td>";
        echo $row['Bus_Name'];
        echo "</td><td>";
        echo $row['Tel'];
        echo "</td>";
        
       
          
        ?>

       

        </tr>

<?php
       }

       echo "</table>";


?>
<h1 class="topic_bus"> ...Our Route Services...</h1>

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

        </tr>

<?php
       }

       echo "</table>";


?>


          

             <div class="about-sec">
        <div class="about-img">
            <img src="image/bus.jpg">
        </div>
        <div class="about-intro">
            <h3>Our Strategy</h3>
            <p>The application is quite simple and easy to use,
                all that needs too be done is to browse the website and do your booking online.</p>
            <p>We offer a complete online bus booking platform where you can buy BUS TICKETS. The traveler can purchase bus tickets online, and in exchange, download the tickets in their device.</p>
        </div>
    </div>


     <!--this is the footer calling-->
     <?php include("footer.php");
             ?>



  </body>
</html>
