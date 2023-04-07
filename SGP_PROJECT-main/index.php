<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   
  
  <link rel="stylesheet" href="copyright.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="quick_navbar_arrow.css">
  <link rel="stylesheet" href="blog_landing.css">
  <link rel="stylesheet" href="blog_detail.css">
  <link rel="stylesheet" href="Emergency-Help.css">
   <title>Hospital Management</title>
  
   <link rel="stylesheet" href="/index_css/doctor.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  
   <link rel="stylesheet" href="/index_css/counter.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <style>
   #leftbox{
      text-align: center;
      float:left;
      width: 24.7%;
      background-color: white;
   }
   #midbox{
      text-align: center;
      float: left;
      width: 24.7%;
      background-color: #fff;
   }
   #rightbox{
      text-align: center;
      float: left;
      width: 24.7%;
      background-color: #fff;
   }
   #lastbox{
      text-align: center;
      float: left;
      width: 24.7%;
      background-color: #fff;
   }
  </style>
</head>

<body>
   <!--navbar start-->
   <?php
   include '_nav.php';
   ?>
   <!--navbar end-->

   <!-- landing start -->
   <div id="dr_landing">
      <div class="dr_wel">
        <h2>We provide Medical Service That You can Trust</h2>
        <br>
        <br><br><br><br><br><br><br><br><br><br>
        <ul>
         
         <h3>Lets all work together to put an end to this pandemic. <br> Help stop the spread.</h3>
        </ul>
      </div>
    </div>
  
   <!-- landing end -->

   <!-- services start-->
   <div class="container" style="text-align:center">

      <div class="box1">
         <div class="icon">
            <i class="fas fa-user-md"></i>
         </div>
         <div class="content">
            <h1>Doctor</h1>
            
            <p></p>We provide the best doctors & services that you can trust</p>
            <button class="M_S-button1"><a href="/om/Doctors.php">Click Here</a></button>
         </div>
         <br>

      </div>
      <div class="box1">
         <div class="icon">
            <i class="fas fa-address-book"></i>
         </div>
         <div class="content">
            <h1>Appointment</h1>
            <p>Get your appointments booked straight-away from your home</p>
            <button class="M_S-button1"><a href="/om/appointment_form.php">Click Here</a></button>
         </div>
         <br>
      </div>
      <div class="box1">
         <div class="icon">
            <i class="fas fa-star"></i>
         </div>
         <div class="content">
            <h1>Feedback</h1>
            <p>Get to know the reviews of patient & doctors working here</p>
            <button class="M_S-button1"   ><a href="/om/contact.php">Click Here</a></button>
         </div>
         <br>
      </div>
   </div>
   <!-- services end-->
   <div id="Emergency-Help" style=background-color:rgb(255,255,255);>
      <div class="EH">
         <div class="EH-top" style="color:rgb(255, 255, 255);text-align: center;">
            <br>
            <h1 >For emergency medical care</h1><h1>Contact @<span style="color:rgb(255, 255, 255); font-size: 25px; "><i> 9512199416 </i></span></h1>
               
            <br>
            <h3>The best services are there for you <span style="color: rgb(255, 255, 255); font-size: 30px; ">24*7</span></h3>
        
         
         <h3 style="color:rgb(255, 247, 247);text-align: center;">We are always ready to help <span style="color: #fffcfc;">you</span> &<br><span
            style="color:white;">your
            family</span></h3>
            <br>
         </div>
      </div>
      </div>
<br><br><br>
      <div class="features-bottom"  style="text-align:center ;" >
         <div class="feature-box" >
            <div class="icon">
            :::::::::::::::
               <i  class="fas fa-ambulance"></i>
            </div>
            
            <!-- icofont -->
            <h2>Emergency Help</h2>
            <p>The best services are there for you 24*7</p>
         </div>
         <br>
         <div class="feature-box">
            <div class="icon">
               --------
               <i class="fas fa-first-aid"></i>
               ---------
            </div>
            <h2>Enriched Pharmacy</h2>
            <p>Get the prescribed medicines at the best rates & enriched for you!</p>
         </div>
         <br>
         <div class="feature-box">
            <div class="icon">
               +++++++
               <i class="fas fa-stethoscope"></i>
               +++++++
            </div>
            
            <h2>Medical Treatment</h2>
            <p>We provide treatments for both major & minor diseases!</p><br><br><br>
         </div>
      </div>
   </div>
   <!-- features end-->

   <div id="counter" >
      <div class="counter-up">
         <div class="content">
            <div class="boxCounter" id="leftbox" style="border: 2px solid green;">
               <div class="iconCounter"><i class="fas fa-procedures"></i></div>
               <div class="info">
                  <p><span class="counter">724</span></p>
                  <div class="text">Hospital Rooms</div>
               </div>
            </div>
            <div class="boxCounter" id="midbox" style="border: 2px solid green;">
               <div class="iconCounter"><i class="fas fa-user-md"></i></div>
               <div class="info">
                  <p><span class="counter">508</span></p>
                  <div class="text">Specialist Doctors</div>
               </div>
            </div>
            <div class="boxCounter" id="rightbox" style="border: 2px solid green;">
               <div class="iconCounter"><i class="fas fa-users"></i></div>
               <div class="info">
                  <p><span class="counter">436</span></p>
                  <div class="text">Happy Patients</div>
               </div>
            </div>
            <div class="boxCounter" id="lastbox" style="border: 2px solid green;">
               <div class="iconCounter"><i class="fas fa-trophy"></i></div>
               <div class="info">
                  <p><span class="counter">120</span></p>
                  <div class="text">Our Achievements</div>
               </div>
            </div>
         </div>
      </div>

      <script>
         $(function () {
            $(".counter").counterUp({
               delay: 10,
               time: 1200
            });
         });
      </script>
   </div>
         <?php
         include '_footer.php';
         ?>
   <div id="quick_navbar_btn">
      <a href="#for_quick_arrow">
         <i class="fas fa-chevron-up"></i>
      </a>
   </div>
   <?php
   include '_copyright.php';
   ?>


</body>

</html>