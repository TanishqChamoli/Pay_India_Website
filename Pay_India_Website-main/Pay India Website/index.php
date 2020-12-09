<!DOCTYPE html>
<html>
    <head>
        <title>Pay India</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/index_style.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
    </head>
    <body>
        <header>
            <nav id="header-nav" class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php" class="pull-left">
                            <div id="logo"  alt="Logo img"></div>
                        </a>

                        <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>


                    <div id="collapsable-nav" class="collapse navbar-collapse">
                        <ul id="nav-list" class="nav navbar-nav navbar-right">
                          <!-- <li> -->
                            <!-- <button type="button" class="btn btn-primary">
                              <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
                              Admin Login
                            </button> -->
                            <!-- <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
                                    Admin Login <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a href="AdminLogin1.php">Admin 1</a></li>
                                  <li><a href="AdminLogin2.php">Admin 2</a></li>
                                </ul>
                            </div>
                          </li> -->
                          <!-- <li>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='service_provider_login.php'">
                            <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
                                Distributor
                            </button>
                          </li> -->
                          <li class="accordian">
                            <a href="#nav-Admin-Login" class="nav-link" data-toggle="collapse"><span class="glyphicon glyphicon-user"></span><br class="hidden-xs">Admin Login<i class="fa fa-angle-down float-right"></i></a>
                            
                            <div id="nav-Admin-Login" class="accordian-content collapse">
                              <a href="AdminLogin1.php" class="nav-link">Admin 1</a><br>
                              <hr>
                              <a href="AdminLogin2.php" class="nav-link">Admin 2</a>
                            </div>
                          </li>

                          <li>
                            <a href="service_provider_login.php">
                              <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
                              Distributor Login
                            </a>
                          </li>
                          <li>
                            <a href="customer_login.php">
                              <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
                              Retailer Login
                            </a>
                          </li>
                          <!-- <li id="phone" class="hidden-xs">
                            <a href="tel: 410-602-5008">
                              <span>410-602-5008</span>
                            </a>
                            <div>* We Deliver</div>
                          </li> -->
                        </ul><!--#nav-list-->
                    </div><!--.collapse .navbar-collapse-->


                </div>
            </nav>
        </header>

        <!-- <div id="bg">
          
        </div> -->

        <!-- <footer class="footer">
          <center><p>SERVICES WE SUPPORT</p></center>
          
          <div class="services">
            <img src="./images/1.png" alt="AEPS" style="display: block; margin-right: auto; margin-left: auto;">
            <img src="./images/2.jpg" alt="BBPS" style="display: block; margin-right: auto; margin-left: auto;">
          </div>
        </footer> -->

        <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>