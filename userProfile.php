<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="userPro.css">
        <link rel="stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>

    <body>
    
        <div class ="blackShadow">
        <div class = "head5">
            <h1>Applications</h1>
        </div>
        
<div class = "bodySection">
    <table>
    <tr>
        <th>NO </th>
        <th>Prgramme </th>
        <th>Status </th>
        <th>Letter </th>
    </tr>
    <tr>
        

        <td>1</td>
        <td> <?php echo $_SESSION['userProgram']; ?> </td>
        <td> <?php echo $_SESSION['applicantStatus'] ;?> </td>
        <td>
            <div class="container">
                <button Class="btn btn2" name = "generatePdf">PDF</button>
            </div>
        </td>
    </tr>

    </table>
   

         
            <button Class="btnHome" onclick="fromViewToHome()">OK</button>
       
        <script>
            function fromViewToHome()
            {
                window.location ="applY.php";
            }
        </script>
        </div>
        
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



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
                     <h4>Follow us</h4>
                      <div class ="social-links">
                         <a href ="#"><i class = "fab fa-facebook-f"></i></a>
                         <a href ="#"><i class = "fab fa-twitter"></i></a>
                         <a href ="#"><i class = "fab fa-instagram"></i></a>
                         <a href ="#"><i class = "fab fa-linkedin-in"></i></a>
                     </div>
                 </div>
                 
        </div>
        </div>
        </footer>
     
    </body>
   
</html>