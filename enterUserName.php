<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="adminHeater.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <title>Enter Username</title>
    </head>
    <body>
    <nav>
            <label class="logo">Application Status</label>
            <ul>
                <li><a class ="active" href ="applY.php">Home</a></li>
                <li><a name ="clickedMe" href ="includes/passwordReset.php">Forgot Username</a></li>
            </ul>
        </nav>
        <br>
        <br>
      <div class ="container">
      <div class = "header">
       </div>

          <form action ="gettingStatus.php" method ="POST">
              <div class ="form_input">
                <input type="text" name="username" placeholder =" Enter Your User Name"/>
              </div>
        
              <input type ="submit" name="submit" value = "View Status" class ="btn-login"/>
            </form>
        </div>

        <footer class ="myFooter">
         <div class = "holder">
             <div class = "row">
                 <div class ="footer-col">
                     <h4>Company</h4>
                     <ul>
                         <li><a href ="#">About us</a></li>
                         <li><a href ="#">Our Services</a></li>
                     </ul>
                 </div>
                 <div class ="footer-col">
                     <h4>Get help</h4>
                     <ul>
                         <li><a href ="#">FAQ</a></li>
                         <li><a href ="enterUserName.php">Application Status</a></li>
                         <li><a href ="applyForm.php">Appy</a></li>
                     </ul>
                 </div>

                 <div class ="footer-col">
                     <h4>STAFF</h4>
                     <ul>
                         <li><a href ="adminLogin.php">Admin Portal</a></li>
                     </ul>
                 </div>
                 <div class ="footer-col">
                     <h4>Follow us</h4>
                      <div class ="social-links">
                         <a href ="https://www.facebook.com/PhakamaniCollege/"><i class = "fab fa-facebook-f"></i></a>
                         <a href ="#"><i class = "fab fa-whatsapp"></i></a>
                         <a href ="#"><i class = "fab fa-instagram"></i></a>
                         <a href ="#"><i class = "fab fa-linkedin-in"></i></a>
                     </div>
                     <div class ="footer-col">
                     
                 </div>
                 
    
        </div>
        </footer>
      
    </body>
   
</html>