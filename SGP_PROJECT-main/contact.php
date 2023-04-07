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


    <!-- Doctor Information Start -->
    <link rel="stylesheet" href="/index_css/doctor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Doctor Information End -->

    <!-- Counter Start -->
    <link rel="stylesheet" href="/index_css/counter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <style>
        #con1 {
            margin: 2px;
            text-align: center;
            float: left;
            color: white;
            border: 2px solid green;
            background-color: rgb(57 126 110);
            width: 32.5%;
            height: 150px;

        }

        #con2 {
            margin: 2px;
            text-align: center;
            float: left;
            color: white;
            border: 2px solid green;
            background-color: rgb(57 126 110);
            height: 150px;
            width: 32.5%;
        }

        #con3 {
            margin: 2px;
            text-align: center;
            float: left;
            height: 150px;
            color: white;
            background-color: rgb(57 126 110);
            border: 2px solid green;
            width: 32.5%
        }

        #squre {
            color: rgb(255, 255, 255);
            border: 2px solid green;
            background-color: rgb(57 126 110);
            margin-left: 2px;
            margin-right: 16px;
            margin-bottom: 0px;
        }

        a {
            color: white;
        }
        
        #cart{
           
            float: left;
            height: 250px;
            width: 32.5%

        }
        #par{
            height: 130px;
            width: 100%
        }
        
    </style>
</head>

<body>
    <?php
        include '_nav.php';
    ?>

    <div id="mainn">
        <div id="contect">
            <br>
            <div id="squre" style="font-weight:600 ;">
                <ul style="color: rgb(255, 255, 255);">
                    <li id="dr_home"><a href="index.html">Home</a>&nbsp;&nbsp;>>&nbsp;&nbsp;<a href>Service</a></li>
                </ul>
            </div>
            <div id="con1">
                <br>
                <i class='fas fa-user-md' style="font-size: 30px;"></i>
                <p>
                <h3> LiveLong Hospital</h3>
                </p>
                <p>We are always here for youe help</p>
                <br>
                <p style="text-decoration:underline;">9876543210</p>
            </div>
            <div id="con2">
                <br>
                <i class='fa fa-location-arrow' style="font-size: 30px;"></i>
                <p><h3>Hospital Location</h3></p>
                <p>Charusat university changa,</p>
                <p>Petlad,Anand</p>
            </div>
            <div id="con3">
                <br>
                <i class='fa fa-envelope-open' style="font-size: 30px;"></i>
                <p><h3>Mail</h3></p>
                <p>For any query send a mail on</p><br>
                <p style="text-decoration:underline;">livelong107@gmail.com</p>
            </div>

        </div>
    </div>
      <br><br><br><br><br><br><br><br><br><br><br>
      <div id="cart">
         <img src="https://tse4.mm.bing.net/th?id=OIP.YTCHIFDcDOD5NJQmYo6i-wHaHa&pid=Api&P=0" alt="">
      </div>
        
      <div style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" id="par">
        <br><br><br><br><br><br>
        <p><h3  style="text-align: center; color: rgb(57 126 110); font-weight: 800; text-decoration: underline;">Contact Us</h3></p>
        <br><br><br>
        <p>LiveLong Hospitals is always looking to make things easier for you. Our aim is to provide our customers with the</p> 
        <p>best medical facilities, constant care, and reliable support. If you would like to get in touch with a doctor from a</p>
        <p>specific department, would like some specific information about the services we provide, or just have a</p>
        <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; question for us, write to us at <span style="color: blue; text-decoration: underline;">livelong107@gmail.com</span>  and we will get back to you.</p>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


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