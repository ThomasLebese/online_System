<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin login</title>
        <link rel = "stylesheet" href="AdminLogPage.css">
        <link rel = "stylesheet" href="adminHeater.css">
        <meta name ="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <link rel ="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    </head>
    <body>
        <nav>
            <label class="logo">Phakamani College Admin Page</label>
            <ul>
                <li><a class ="active" href ="applY.php">Home</a></li>
                <li><a name ="clickedMe" href ="includes/passwordReset.php">Forgot password</a></li>
            </ul>
        </nav>

      <div class ="login-box">
              <h1>Admin Login</h1>
              <form action = "verifyAdminInfor.php" method ="POST">
              <div class="textbox">
                <i class = "lar la-user"></i>
                <input type="text" name ="username" placeholder="Username">
              </div>

              <div class="textbox">
              <i class= "las la-lock"></i>
                <input type="password" name ="password" placeholder="Password">
              </div>
              <button Class="adminLog" name = "SUBMIT">Login</button>
           </form>
          </div>
    </body>
   
</html>