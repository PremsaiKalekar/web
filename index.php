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
$sql=" select * from work";
$sql1=" select * from client";

$res=mysqli_query($conn,$sql);
$res1=mysqli_query($conn,$sql1);


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
      <title>Premsai</title>
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
         .card-container {
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
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                       
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="careers.php">CAREERS</a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.html">HOME</a>
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
      <!-- banner section start -->
      <div class="banner_section">
         <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-2">
                           <div class="round"><img src="images/round-icon.png"></div>
                           <p class="number_text">02</p>
                           <div class="line"><img src="images/line.png"></div>
                           <p class="number_text">02</p>
                           <div class="round"><img src="images/round-icon.png"></div>
                        </div>
                        
                        
        
                        <div class="col-sm-5">
                           <div class="taital_main">
                           <!--   <h2 class="construction_text"></h2> -->
                              <h4 class="building_text">Innovation to Improve Business</h4>
                              <div class="contact_bt"><a href="#">CONTACT US</a></div>
                              <div class="get_bt"><a href="#">GET A QUOTE NOW</a></div>
                           </div>
                        </div>
                        <div class="col-sm-5">
                        <img src="sneat-1.0.0/images/h2.png" width="550px",height="550px"></div>
                        </div>
                     </div>
                  </div>

                  
                  
    
               
              
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      
      


      
      <!-- project section start -->
 <!--   <div class="project_section layout_padding">
         <div class="container">
            <h1 class="partner_text"></h1>
            <p class="lorem_ipsum_text">t is a long established fact that a reader will be distracted by the readable content 
               of a page when looking at its layout. The point of using Lorem Ipsum is tha
            </p>
            <div class="choice_main">
               <div class="choose_bt"><a href="#">Choose your home</a></div>
            </div>
         </div>
   </div>-->
   
 <!--  <div class="our_section layout_padding">
         <div class="container">
         
     
            <h1 class="our_text"><strong>OUR SERVICES</strong></h1>
           /
 //   while($rw=mysqli_fetch_row($res))
  //  {
       // ?>
         <p class="client_long_text"></p>-->
            <!--<div class="card-container">
    <div class="card">
    <div class="image_7"><a href="#"><img src="sneat-1.0.0/images/"></a></div>
      <h2></p>
  </div>-->
  <div class="about_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital">
                     <h1 class="about_text">
                    We're Building Modern & Good Quality Software, Website, Mobile app & more... </h1>
                     <p class="long_text">Vertex Technosys is a software based company in Solapur, Maharashtra, India, providing web design, graphic design, web development, software development, mobile development, seo services, e-commerce solutions, custom application development, product development & web promotions.</p>
                     <div class="about_bt"><a href="#">ABOUT MORE</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="about_img"><img src="sneat-1.0.0/images/a1.png"></div>
               </div>
            </div>
         </div>
      </div>
      <?php
    while($rw=mysqli_fetch_row($res))
    {
        ?>
       <div class="about_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital">
                     <h1 class="about_text">
                     <?php echo $rw[1];?> </h1>
                     <p class="long_text"><?php echo $rw[3];?></p>
                     <div class="about_bt"><a href="#">ABOUT MORE</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="about_img"><img src="sneat-1.0.0/images/<?php echo $rw[2];?>" width="200px",height="95px"></div>
               </div>
            </div>
         </div>
      </div>
      <?php
    }?>

>
      </div>
          
      <?php
    while($rw=mysqli_fetch_row($res1))
    {
        ?>
      <div class="clients_section layout_padding">
         <div class="container">
        
            <h1 class="client_text"><strong>Our Client</strong></h1>
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
                              <div class="img_5"><?php echo $rw[3];?></div>
                              <p class="client_lorem_text"></p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="sneat-1.0.0/images/<?php echo $rw[2];?>" width="120px",height="50px"></div>
                              <h2 class="henrry_text"><?php echo $rw[1];?></h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                              <div class="img_5"><?php echo $rw[3];?></div>
                              <p class="client_lorem_text"></p>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12 col-lg-2">
                              <div class="client_img"><img src="sneat-1.0.0/images/<?php echo $rw[2];?>" width="120px",height="50px"></div>
                              <h2 class="henrry_text"><?php echo $rw[1];?></h2>
                              <p class="henrry_taital">(long established)</p>
                           </div>
                           <div class="col-sm-12 col-lg-10">
                              <div class="img_5"><?php echo $rw[3];?></div>
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
      
      





       <div class="footer_section layout_padding">
         <div class="container">
         </div>
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
      <!-- copyright section start -->
      
      <!-- copyright section end -->
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