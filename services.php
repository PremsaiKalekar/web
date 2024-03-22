<?php


$conn=mysqli_connect("localhost","root","",'student');
if($conn)
{
   // echo "connected";
}
else
{
    echo "not connect";
}

?>

<?php 
$sql=" select * from services1";

$res=mysqli_query($conn,$sql);

?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Services</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <style>
      card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  max-width: 1200px;
}

.card {
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  padding: 20px;
  margin: 10px;
  width: calc(25% - 20px);
}

.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #ffffff;
    text-align:center;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
      </style>
   
   </head>
   <body>
      <!-- section header start -->
      <div class="header_section">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
               <div class="logo"><a href="index.html"><h1>PREMSAI</h1></div>
               </div>
               <div class="col-md-9">
                  <div class="menu_text">
                     <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="careers.php">CAREERS</a></li>
                       
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">HOME</a>
                              <a href="about.php">ABOUT</a>
                              <a href="services.php">SERVICES</a>
                              <a href="contact.php">CONTACT US</a>
                              <a href="careers.php">CAREERS</a>
                              
                           </div>
                        </div>
                        <span  style="font-size:33px;cursor:pointer; color: #ffffff;" onclick="openNav()"><img src="images/toggle.png" class="toggle_menu"></span>
                  </div>
                  </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- section header end -->
      <!-- our service section start -->
          
      <?php
    while($rw=mysqli_fetch_row($res))
    {
        ?>
      <div class="clients_section layout_padding">
         <div class="container">
        
            <h1 class="client_text"><strong>Our Services</strong></h1>
            <p class="client_long_text"> </p>
            <div class="clients_section_2">
               <div id="my_carousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
                     <li data-target="#my_carousel" data-slide-to="1"></li>
                     <li data-target="#my_carousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="sneat-1.0.0/images/<?php echo $rw[2];?>" width="120px",height="50px"></div>
                              <h2 class="henrry_text"><?php echo $rw[1];?></h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                            <bold>  <div class="img_5"><?php echo $rw[3];?></div></bold>
                              <p class="client_lorem_text"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
    }
    ?>
               
         </div>
      </div>
      <div class="footer_section layout_padding">
         <div class="footer_section_2">
            <div class="container">
               <h2 class="addres_text">Address</h2>
               <div class="row map_addres">
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/map-icon.png"><span class="map_icon">1592kuchen nager solapur</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">9307209470</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/email-icon.png"><span class="map_icon">kalekarpremsai2000@gmail.com</span></div>
                  </div>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="images/in-icon.png"></a></li>
                     <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script>
   </body>
</html>