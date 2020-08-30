


 <!DOCTYPE html>
 <html>
<head>
      <style>
         .error {color: #FF0000;}
      </style>
      <link rel="stylesheet" href="style2.css">
      <link rel="stylesheet" href="style1.css">
   </head>
   
   <body>
       <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                            </div>
                            <!--<div class="login-content">
                                <a href="registration.php">Register</a>

                                <center><a href="login1.php">Login</a></center>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                  <li><a href="#">Mega Menu</a>
                                        <ul class="dropdown">
                                            <li><a href="category01.php"> Our Courses </a>
                                               <!-- <ul class="dropdown">
                                                    <li><a href="index.php">Acting Class</a></li>
                                                <li><a href="#">Dancing Class </a></li>
                                                <li><a href="#">Writing Class</a></li>
                                                <li><a href="#">Singing Class</a></li>
                                                <li><a href="#">Modeling Class</a></li>
                                                <li><a href="#">Photograpy</a></li>
                                        </ul>-->
                                            </li>
                                            <!--<li><a href="#">Our Production</a></li>                                    
                                            <li><a href="#">Our Casting</a></li>
                                            <li><a href="#">Success Stories</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="category01.php">Courses</a></li>
                                    <!--<li><a href="contact.php">Contact</a></li>-->
                                    <li><a href="order.php">My Bookings</a></li>
                                    <li><a href="login1.php">Log out</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>


                <div class="logo-nav-right">
                    
                        <!-- search-scripts 
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                         //search-scripts -->
                        
                        <div align="right">
                        <span>welcome </span>
                        <?php 
                        //session_start();
                        @$userid=$_SESSION["username"];
                        echo $userid;
                        ?>
                        </div>
                        
                </div>


                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+918000665280"><i class="icon-telephone-2"></i> <span>(+91) 6353121872</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>