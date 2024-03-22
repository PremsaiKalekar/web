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

$sql=" select * from vport";


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
   
      
      .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .image {
        width: 45%;
    }
    .description {
        width: 50%;
        text-align: justify;
    }
    </style>
   </head>
   <body>
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
         
     
      <h1 class="our_text"><strong>Portfilio</strong></h1>

      
            
           
            <?php
    while($rw=mysqli_fetch_row($res))
    {
        ?>
            <div class="container">
    <div class="image">
    <img src="sneat-1.0.0/images/<?php echo $rw[2];?>" width="90px",height="80px"><hr>
    
    </div>
    <div class="description">
      <h1><?php echo $rw['1'];?></h1>

        <p><?php echo $rw['3'];?></p>
       
    </div>
</div>
<?php
    }?>
     
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