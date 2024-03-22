<?php

    $conn=mysqli_connect("localhost","root","","student");
    if($conn)
    {
        echo "connect<br>";
    }
    else
    {
        echo "not connect<br>";
    }
    if(isset($_POST['btn']))
    {
        $uname=$_POST['fname'];
        $email=$_POST['email'];
        $phone=$_POST['phno'];
        $Message=$_POST['mass'];
    
        
        $sql="insert into port(name,email,phone,msg) values('$uname','$email','$phone','$message')";

        if(mysqli_query($conn,$sql))
        {
            echo "data inserted";
        } 
        else
        {
            echo "data not inserted";
        }
    }

   
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
      <title>Contact</title>
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
   </head>
   <body>
      <!-- section header start -->
      <div class="header_section">
         <div class="container">
            <div class="row">
               <div class="col-md-3">
                  <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               </div>
               <div class="col-md-9">
                  <div class="menu_text">
                     <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="services.php">SERVICES</a></li>
                        <li><a href="vport.php">PORTFILIO</a></li>
                        <li><a href="contact.php">CONTACT US</a></li>
                        <li><a href="clients.html">CLIENTS</a></li>
                        <li><a href="#"><img src="images/search-icon.png"></a></li>
                        <div id="myNav" class="overlay">
                           <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                           <div class="overlay-content">
                              <a href="index.php">HOME</a>
                              <a href="about.php">ABOUT</a>
                              <a href="services.php">SERVICES</a>
                              <a href="vport.php">PORTFILIO</a>
                              <a href="contact.php">CONTACT US</a>
                              <a href="client.html">CLIENTS</a>
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
      <!-- contact section start -->
      <div class="contact_section contact_main">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="contact_bg">
                     <div class="input_main">
                        <div class="container">
                           <h2 class="request_text">CONTACT US</h2>
                           <form method="post" action="c.php">
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Your Name" name="fname" value="<?php echo$rw[1];?>">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Email" name="email"value="<?php echo$rw[2];?>">
                              </div>
                              <div class="form-group">
                                 <input type="text" class="email-bt" placeholder="Phone" name="phno" value="<?php echo$rw[3];?>">
                              </div>
                           <form action="/action_page.php">
                              <div class="form-group">
                                 <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="mass" value="<?php echo$rw[4];?>"></textarea>
                              </div>
                           </form>
                           </form>
                        </div>
                     </div>
                     <button type="submit" class="btn btn-primary" name="btn">Send</button>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="footer_section_2">
            <div class="container">
               <h2 class="addres_text">Addres</h2>
               <div class="row map_addres">
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/map-icon.png"><span class="map_icon">No.123 Chalingt Gates, Supper market New York</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/phone-icon.png"><span class="map_icon">( +71 7986543234 )</span></div>
                  </div>
                  <div class="col-sm-12 col-lg-4">
                     <div class="map_text"><img src="images/email-icon.png"><span class="map_icon">demo@gmail.com</span></div>
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
      <div class="copyright_section">
         <p class="copyright_text">Copyright 2020 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
      </div>
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