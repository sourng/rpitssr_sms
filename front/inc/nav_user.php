<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#"> <img src="logo.png" alt="SourngOnline"> </a>
              </div>
              <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                      <li><a href="your-cources.php?login=<?php echo $_SESSION["userType"] ?>"><i class="fa fa-play-circle"></i> Your Courses</a></li> 
                      <!-- <li><a href="contact.php"> <i class="fa fa-comments"></i> Contact</a></li> -->
                      
                      <li><a href="students.php?login=<?php echo $_SESSION["userType"] ?>"><i class="fa fa-user-graduate"></i> Students</a></li>  
                      <li><a href="become-instructor.php"><i class="fa fa-user"></i> <?php echo isset($_SESSION['username'])?$_SESSION['username']:''; ?></a></li>  
                    
                    
                    <li><a href="logout.php"><span class="fa fa-sign-in-alt"></span> Logout</a></li>
                  </ul>

                </div>
              </div>
            </div>
          </nav> 