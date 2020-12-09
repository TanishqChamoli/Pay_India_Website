<!DOCTYPE html>
<html>
    <head>
        <title>Pay India</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/login.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.css">
    </head>
    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <h4>Distributor Login</h4>
                <span class="glyphicon glyphicon-user"></span><br class="hidden-xs">
              </div>
          
              <!-- Login Form -->
              <form action="./Distributor/backend/login.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="Email-id" placeholder="Email-id">
                <input type="password" id="password" class="fadeIn third" name="Password" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
              </form>
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
              </div>
          
            </div>
          </div>

        <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>