<?php 
// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Connect to Boostrap -->
    <link rel="stylesheet" href="asset/fontawesome/web-fonts-with-css/css/fontawesome-all.css">

    
   <link rel="stylesheet" href="asset/css/bootstrap.min.css">
   <script src="asset/jquery/jquery.min.js"></script>
   <script src="asset/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="asset/style.css">

    <title>CUS B12 | Welcome Advance Web Development </title>

    <style>
        .jumbotron{
            background-color: aqua;
        }
        .title{
            color:tomato !important;
        }
        .footer{
          background-color:#5f5f5f;
            color: white;
        }

        .footer2{
          background-color:gray;
            color: white;
            padding:17px;
            font-size: 17px;
        }

        .navbar{
            border-radius: 0px;
            margin-bottom: 0px;
            font-size: 17px;
            background-color:#5f5f5f;
            color:#f1f1f1 !important;
        }
        .navbar a{
            color: aliceblue !important;
        }
        ul .dropdown-menu{
          background-color:#5f5f5f;

        }
        ul .dropdown-menu{
          background-color:#5f5f5f;

        }

        ul a:hover { 
          color :chocolate !important;
        }

       .navbar-nav > li.active > a{
          /* color:darkgreen !important; */
          /* background-color:rgb(15, 0, 100) !important; */
          background-color:#5f5f5f !important;
          color :chocolate !important;
        }

        ul>li>a{
          color: white;
        }

        .welcome1{
            margin-bottom: 0px;
            background-color:brown;
            color: white !important;
        }
        .carousel{
          margin-top: 50px;
        }
        .instructor-contact{
            font-size: 17px;
            color:white;
            padding-top: 5px;
        }
        
        .contact-inst{
            padding-left: 15px;
            padding-right: 15px;
            margin-top: -58px;
            background-color: cadetblue;
            z-index: 4;
            position: absolute;
            border-top-right-radius: 15px !important;
            /* opacity: 0.8; */
        }
        .social-instructor ul li{
            float:left;
            list-style-type: none;
            padding-right: 5px;
            font-size: 25px;
            
        }
        .mysocial{
            background-color: rgba(63, 62, 65, 0.548);margin-bottom: 15px;
            height: 33px;
            
        }
        .thumnail{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    
    </style>




</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar -->    
    <?php require_once 'inc/nav_user.php'; ?>
<!-- End Navbar -->

    <div class="container">
        <h2 style="padding-left:15px;"><span class="fa fa-user" style="color:green;"></span> Instructor</h2>
    
    <div class="row">

<!-- Instructor -->
        <div class="col-md-3 instructor-thumnail">
                <img class="thumnail" style="width: 100%;" src="uploads/sourng.jpg" alt="">
            <div class="contact-inst">
                    <div class="instructor-contact"><i class="fa fa-user"></i> SENG Sourng</div>
                    <div  class="instructor-contact"><i class="fa fa-phone-square"></i> 094888999</div>
            </div>
            <div class="social-instructor mysocial col-sm-12">
                <ul>     
                    <!-- <li>Find:</li>               -->
                    <li><a href="#"><i class="fab fa-facebook"></i> </a></li>
                    <li><a href="#"><i class="fab fa-twitter-square"></i> </a></li>
                    <li><a href="#"><i class="fab fa-google-plus-square"></i> </a></li>
                </ul>
            </div>
        </div>


    </div>
    <!-- End Row -->
    </div>
    <!-- End Container -->
    





    
  
        
      <div class="container-fluid footer">
        <div class="row">
          <div class="col-sm-3">
            <h3>ផ្នែក​វិទ្យា​សាស្រ្ត​កុំ​ព្យូទ័រ​​</h3>
            <ul>
              <li><a href="#">PHP & MySQL</a></li>
              <li><a href="#">bootstrap 3</a></li>
              <li><a href="#">CodeIgniter 3</a></li>
              <li><a href="#">Laravel 5.6</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h3>ផ្នែក​បណ្តាញ​អគ្គិសនី</h3>
            <ul>
              <li><a href="#">PHP & MySQL</a></li>
              <li><a href="#">bootstrap 3</a></li>
              <li><a href="#">CodeIgniter 3</a></li>
              <li><a href="#">Laravel 5.6</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h3>វិស្វកម្ម​សំណង់​</h3>        
            <ul>
              <li><a href="#">PHP & MySQL</a></li>
              <li><a href="#">bootstrap 3</a></li>
              <li><a href="#">CodeIgniter 3</a></li>
              <li><a href="#">Laravel 5.6</a></li>
            </ul>
          </div>

          <div class="col-sm-3">
                <h3>បដិសណ្ឋារកិច្ច​</h3>        
                <ul>
                  <li><a href="#">សេវាកម្ម​សណ្ឋាគារ​</a></li>
                  <li><a href="#">សេវាកម្ម​ម្ហូប​អាហារ​</a></li>
                  <li><a href="#">CodeIgniter 3</a></li>
                  <li><a href="#">Laravel 5.6</a></li>
                </ul>
              </div>

        </div>
      </div>

      <div class="container-fluid footer2">
         <p>Design by: SENG Sourng</p>
      </div>




</body>
</html>