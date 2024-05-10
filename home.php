<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Travel Comfy Bus and Ticket Booking</title>
    <link rel="stylesheet" href="cssfile/nav.css">
    <link rel="stylesheet" href="cssfile/footer.css">
  <!--  <link rel="stylesheet" type="text/css" href="cssfile/container.css">-->
   <link rel="stylesheet" type="text/css" href="cssfile/videoedit.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <style type="text/css">


      body{

             background-color: #fcfafa; 
           /* background-image: url(image/4.jpg);
           background-size: contain;
          background-repeat: no-repeat;
          background-attachment: fixed; */





      /*
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                background-color: #fff;
            }
              #container{

                height: 100vh;
                width: 100%;
                background-image: url(image/3.jpg);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                transition: 2s;
                font-family: cursive;
                animation-name: animate;
                animation-direction: alternate-reverse;
                animation-duration: 40s;
                animation-fill-mode: forwards;
                animation-iteration-count: infinite;
                animation-play-state: running;
                animation-timing-function: ease-in-out;


            }

            @keyframes animate{

                0%{
                    background-image: url(image/1.jpg);
                }
                10%{
                    background-image: url(image/2.jpg);
                }
                20%{
                    background-image: url(image/3.jpg);
                }
                30%{
                    background-image: url(image/4.jpg);
                }
                40%{
                    background-image: url(image/5.jpg);
                }
                50%{
                    background-image: url(image/6.jpg);
                }
                60%{
                    background-image: url(image/7.jpg);
                }
                70%{
                    background-image: url(image/8.jpg);
                }
                80%{
                    background-image: url(image/9.jpg);
                }
                90%{
                    background-image: url(image/10.jpg);
                }
                100%{
                    background-image: url(image/1.jpg);
                }

*/
            }
.imageContainer{            
   width: 100%;
   height: 100vh;
   background-image:  url(image/7.jpg);
   background-size: cover;
   background-position:center;
   padding: 2px 2px;
   position: relative;
}            
.home_details{
  color: #11caf3;
  font-family: inherit;
  font-size: 74px;
  padding: 162px 5px 5px 185px;

}
.font{

  color: black;
}
.btnHome{

    font-family: inherit;
    background-color: #11CAF3;
    padding: 13px 44px 13px 44px;
    font-size: 18px;
    border-style: none;
    border-radius: 5px;

}
.btnHome:hover{
  background-color: #15afd2;
  cursor: pointer;
  color: #000;
}  

/* --------------------------SECTION1----------------------- */
.section1{
    background-color:#ddeff3;
}
.section1 p{
  color: #000;
}
.section1 > h2{
    text-align: center;
    line-height: 4;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #000;
}
.Route, .route1{
    margin-left: 50px;
    display: flex;
    padding: 20px;
    align-items: center;
}
.Route > p {
    border:2px solid #11CAF3;
    background-color: white;
    padding: 10px 60px;
    border-radius: 25px;
    margin-left: 100px;
    display: flex;
}
.route1 > p {
    border:2px solid #11CAF3;
    background-color: white;
    padding: 10px 60px;
    border-radius: 25px;
    margin-left: 100px;
    display: flex;
}
/* p.route2 {
    color: black;
    padding: 10px 73px;
}  */
@media screen and (max-width: 768px){
    .header{
      max-width: 100%;
    }
  }
/* -------------------------SECTION 2------------------- */
.section2 > h2{
    color: #000;
    text-align: center;
    line-height: 4;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.row{
    display: flex;
    width: 100%;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px o;
}
.text-col{
    flex-basis: 50%;
    margin-bottom: 20px;
}
.img-col{
    flex-basis: 50%;
    margin-bottom: 20px;
    /* margin-left: 5px; */
}
.img-col video{
    display: block;
    width: 80%;
    margin: auto;
    border-radius: 5px;
}
.text-col p{
    color: #000;
    font-size: 20px;
    width: 450px;
    line-height: 3;
    height: 100px;
    font-stretch: extra-expanded;
    margin-bottom: 130px;
    margin-left: 50px;
}
/* -----------------------------Section3-------------------- */
.section3{
    border: 2px solid #00878E;
    border-radius: 5px;
    margin: auto;
    width: 1000px;
    height: 250px;
    background-color: #00878E;
    color:white;
    align-items: center;
    /* position: absolute;
    top: 250%;
    bottom: 10%;
    left: 150px; */
    margin-top: 100px;
}
.section3 > h2{
    text-align: center;
    line-height: 3;
}
.section3 > p{
    line-height: 2;
    text-align: center;
    
}
button{
    margin-top: 30px;
    margin-right: 300px;
    position: absolute;
    right: 250px;
}
/* -------------------------section4--------------------- */
.section4 {
    margin-top: 100px;
    background-color: #ddeff3;
    padding: 30px;
    margin-bottom: -100px;
}
.section4 > h2{
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-transform: uppercase;
    color: #000;
}
.box{
    display: flex;
    align-items: center;
    margin-left: 150px;
    margin-top: 50px;
    color: white;
}
.first {
    border: 2px solid #00878E;
    background-color: #00878E;
    width: 100px;
    height: 200px;
    display: inline-block;
    flex-basis: 40%;
    margin-bottom: 20px;
    text-align: center;
    border-radius: 5px;
    line-height: 2.5;
    box-shadow: 0 15px 40px rgba(97, 97, 97, 0.1);
}
.first:hover{
    background-color: #fcfafa;
    border: #fcfafa;
    color: #000;
    cursor: pointer;
    transition: .2s;
}
.second {
    border: 2px solid #00878E;
    background-color: #00878E;
    width: 100px;
    height: 200px;
    display: inline-block;
    flex-basis: 40%;
    margin-left: 40px;
    margin-bottom: 20px;
    text-align: center;
    line-height: 2.5;
    border-radius: 5px;
}
.second:hover{
    background-color: #fcfafa;
    border: #fcfafa;
    color: #000;
    cursor: pointer;
    transition: .2s;
}



</style>

  </head>
  <body>



  <div id="container">


              <!--this is the header callling(nav bar)-->

            <?php include("nav.php");
             ?>



             

                <div class="imageContainer">
                  <!-- <h1 class="home_details">Get Your Bus Ticket, Anytime, <br><font class="font">Anywhere..</font>

                  <br>


                       <a href="signUp.php">     <button class="btnHome">SIGN UP NOW</button></a>



                  </h1> -->
                </div>
  </div>

  <div class="section1">
        <h2>OUR POPULAR ROUTES</h2>
        <div class="Route">
            <P>Wuse - Masaka</P>
            <P>Wuse - Berger</P>
            <P>Masaka - Area 1</P>
        </div>
        <div class="route1">
            <P>Berger - Wuse</P>
            <P>Gariki - Mabushi</P>
            <P>Area 1 - Masaka</P>
        </div>
    </div>  
    <div class="section2">
        <h2>COMFY TRAVELS</h2>
        <div class="row">
            <div class="img-col">
              <video autoplay loop muted class="section">
                <source src="video/video (2).mp4" type="video/mp4">
              </video>
            </div>
            <div class="text-col">
                <p>Book Your Tickets with Us. 
                   No hassle, No stress, Get there on time. 
                   Get to your Location on a Budget.
                </p>
            </div>
        </div>
    </div> 
 

<div class="section3">
        <h2>Easiest Way To Book A Bus</h2>
        <p>Book Your Tickets with Us. 
           No hassle, No stress, Get there on time. 
           Get to your Location on a Budget.
        </p>
        <button class="btnHome">FIND A BUS</button>
    </div> 
    <!-- <br> <br> <br> <br> &nbsp; -->
    <div class="section4">
        <h2>Why Journey With Us</h2>
        <div class="box">
            <div class="first">
                <h3>Easiest Way To Book With Us</h3>
                <p>With our quick, easy and safe booking process, you can secure the best bus with confidence.</p>
            </div>
            <div class="second">
                <h3>Know The Price Before You Go</h3>
                <p>Discover the best deals and save money while you book with us</p>
            </div>
        </div>
    </div>
            
 

            <!--this is the footer calling-->
            <?php include("footer.php");
             ?>



  </body>
</html>
