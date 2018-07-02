<?php // Start the session
session_start();

if(isset($_SESSION['email'])){
    header('Location: dashboard.php?login='.$_SESSION["userType"]); 
}
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
    
    </style>




</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar -->
    
        <?php require_once 'inc/nav.php'; ?>

    <!-- End Navbar -->

    <!-- Slide -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="uploads/slide/1.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>ញ៉ាំ​សាច់​ត្រី​</h3>
                  <p>LA is always so much fun!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="uploads/slide/2.jpg" alt="Chicago">
                <div class="carousel-caption">
                  <h3>ព្រុយ​ត្រី​បំពង​</h3>
                  <p>Thank you, Chicago!</p>
                </div>
              </div>
          
              <div class="item">
                <img src="uploads/slide/3.jpg" alt="New York">
                <div class="carousel-caption">
                  <h3>សាច់គោអាំង​ Stack</h3>
                  <p>We love the Big Apple!</p>
                </div>
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

    <!-- End Slide -->




    <!-- Marketing -->
    <div class="container">
        
        
    <div class="row">
        <div class="col-md-12">
            <h1 style="background-color: tomato; padding: 10px; margin: 10px 0px 10px 0px;">Marketing Promotion</h1>
        </div>




            <!-- <h1>Marketing Promotion</h1> -->
            <div class="col-md-3">                
              <div class="thumbnail">
                <a href="#">
                  <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum...</p>
                  </div>
                </a>
              </div>
            </div>
        <!-- Impage 2 -->

    <div class="col-md-3">                
        <div class="thumbnail">
          <a href="#">
            <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <p>Lorem ipsum...</p>
            </div>
          </a>
        </div>
    </div>

      <!-- Image 3 -->

      <div class="col-md-3">                
            <div class="thumbnail">
              <a href="#">
                <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                <div class="caption">
                  <p>Lorem ipsum...</p>
                </div>
              </a>
            </div>
          </div>

            <div class="col-md-3">
                    <div class="thumbnail">
                      <a href="#">
                        <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                        <div class="caption">
                          <p>Lorem ipsum...</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-3">
                        <div class="thumbnail">
                          <a href="#">
                            <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                            <div class="caption">
                              <p>Lorem ipsum...</p>
                            </div>
                          </a>
                        </div>
                      </div>

                      <div class="col-md-3">
                            <div class="thumbnail">
                              <a href="#">
                                <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                                <div class="caption">
                                  <p>Lorem ipsum...</p>
                                </div>
                              </a>
                            </div>
                          </div>

                          <div class="col-md-3">
                                <div class="thumbnail">
                                  <a href="#">
                                    <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                                    <div class="caption">
                                      <p>Lorem ipsum...</p>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="thumbnail">
                                      <a href="#">
                                        <img src="uploads/ads/ads1.jpg" alt="Lights" style="width:100%">
                                        <div class="caption">
                                          <p>Lorem ipsum...</p>
                                        </div>
                                      </a>
                                    </div>
                                  </div>



          


          </div>
    </div>


    <!-- End Marketing -->


    
    <div class="jumbotron text-center welcome1">
        <h1 class="title">រៀន​បង្កើត​គេហទំព័រ​ Website Development</h1>
        <p>រៀន​បង្កើត​គេហទំព័រ​ជាមួយ​ PHP នៅវិទ្យា​ស្ថាន​ពហុ​បច្ចេក​ទេស​ភូមិភាគ​តេជោសែន​សៀម​រាប​</p> 
      </div>
        
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