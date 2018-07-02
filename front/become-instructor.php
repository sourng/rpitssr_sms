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

        /* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
    
    </style>




</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

   <!-- Navbar -->    
    <?php require_once 'inc/nav.php'; ?>
<!-- End Navbar -->

    <div class="container">

            <dir style="margin-top: 63px;"></dir>

            <div class="row" style="margin-bottom: 23px;">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="background-color: gray;padding: 0px 5px 15px 5px">
                    <form role="form">
                        <h3 style="text-align: center;color: white;">Become an Instructor </h3>
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                            <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Display Name" tabindex="3">
                                    </div>
        
                                    <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
                                     </div>

                            </div>

                            
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-md-3">
                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info" tabindex="7">I Agree</button>
                                    <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                                </span>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-9" style="color: white;">
                                 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a style="color: tomato;" href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
                            </div>
                        </div>
                        
                        <hr class="colorgraph">
                        <div class="row">
                            <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                            <div class="col-xs-12 col-md-6"><a href="signin-instructor.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
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

<script>
    $(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
</script>


</body>
</html>