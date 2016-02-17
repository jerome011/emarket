<?php 
  if (!isset($_SESSION)) {
    session_start();
  }
?>
<!doctype html>
<html>
  <head>
      <title> Home </title>
      <link rel="stylesheet" type="text/css" href="master/main.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  </head> 
  <body>
     <header class="navbar-inverse" role="banner">
          <div class="container">
            <nav  role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="index.php">Emarket</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="products.php">Products</a></li>
                <?php 
                  if (isset($_SESSION["user"])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                  }else {
                    echo '<li><a href="login.php">Login</a></li>';
                    echo '<li><a href="register.php">Register</a></li>';
                  }
                ?>


              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"     aria-expanded="false">Browse <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">Payment</a></li>
                  <li><a href="#">Customer Service</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="register.php">Register</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="admin.php">Admin</a></li>
              </ul>
            </li>
            </ul>
        
        
      </div>

           
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
          </div>


      </header>
     
        
        <div class="container">
        <div class="row">

          <?php 
              echo $page_content;
          ?> 
        <br>
        <br>
        <div class=" col-sm-12 col-xs-12">
        <div class="panel panel-info">
        <div class="panel-heading">Featured Items</div>
        <div class="panel-body">
 Panel content
        </div>
        </div>
        </div>
        <div class=" col-sm-6 col-xs-6">
        <div class="panel panel-info">
        <div class="panel-heading">Deal of the day</div>
        <div class="panel-body">
 Panel content 2
        </div>
        </div>
        </div>
        <div class=" col-sm-6 col-xs-6">
        <div class="panel panel-info">
        <div class="panel-heading">Best Sellers</div>
       <div class="panel-body">
       <img src="images/iphone6s.gif" alt="Iphone6s" height="45" width="45">
       </div>
       </div>
       </div>
       </div>
       </div>

       <footer>Copyright 2015-2016, Emarket.com, Inc. or its affiliates </footer>
      


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>

</html>