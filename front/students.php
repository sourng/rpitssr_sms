<?php // Start the session
session_start();

// if(isset($_SESSION['email'])){
//     header('Location: students.php?login='.$_SESSION["userType"]); 
// }
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



        /* Student List */

.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}
.table-filter tr td:nth-child(2) {
	width: 35px;
}
.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}


    
    </style>




</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar -->    
    <?php require_once 'inc/nav_user.php'; ?>
<!-- End Navbar -->

   
<div style="margin-top:33px;"></div>

<div class="container">
			<div class="col-md-12">
            <h3 style="margin-top:33px;">Student List</h3>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<!-- <div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="pagado">Pagado</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="pendiente">Pendiente</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancelado</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
							</div> -->
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
                                    
                                <?php 
                                for($i=1;$i<10;$i++){
                                    ?>
                                    <tr data-status="pagado" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
										<td>
											<div class="media">
												<div class="col-md-2" style="border-radius: 25px;">
                                                <a href="#" class="pull-left">
													<img style="width:100%; border-radius: 50% !important; border: 4px solid;  " src="uploads/sourng.jpg" >
												</a>
                                                </div>
												<div class="media-body">
													<span class="media-meta pull-right">Febrero 13, 2016</span>
													<h4 class="title">
														Lorem Impsum
														<span class="pull-right pagado">(Pagado)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>


                                    <?php
                                }
                                
                                
                                ?>
								
                                    
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
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