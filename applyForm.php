<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" href="meS.css">
    <link rel="stylesheet" href="footer.css">

    <link rel="stylesheet" type = "text/css" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

        <title>

        </title>

    </head>

    <body>
        <div class="surForm"><h1> Application form</h1></div>
        <div class="main"> 
        <form action = "uploadDetails.php" method ="POST" enctype ="multipart/form-data" auto_complete="off">
        <div id="name">
            <h2 class="name"> Names </h2>
            <input class="nameInput" type="text" name ="applicant_Names"required><br>
            <label class="nameLabe"> Name </label>

            <input class ="surnameInput" type ="text" name ="applicant_Surname"required>
            <label class ="SurnameLabel"> Surname</label>
        </div>

        <h2 class ="name">Username</h2>
        <input class="user_Name" type ="text" name ="applicant_Username" required>

        <h2 class ="name">Password</h2>
        <input class="pass" type ="password" name ="applicant_Password"required>
        
        <!--will add this feature-->
        <h2 class ="name">Confirm Password</h2>
        <input class="passCon" type ="password" name ="userPasswordCon"required>

        <h2 class ="name">Cell Number</h2>
        <input class="cellNumber" type ="text" name ="applicant_cellNumber"required>

        <h2 class ="name">Email Address</h2>
        <input class="EmailAddress" type ="text" name ="applicant_email"required>

        <h2 class ="name">Choose a program </h2>
        <select class ="option" name ="programType"required>
            <option disabled ="disabled" selected = "selected">--Choose program--</option>
            <option value ="Learnership"> Learnership</option>
            <option value ="Internship"> Internship</option>
        </select>
        <br>
        

        <h2 class ="name">Upload Your CV </h2>
        <input class ="upload_box" type = "file" name= "CV"required>
        
<br>
<br>
<br>
        <button class ="btn" type = "submit" name= "submit">Apply</button>
        <button class ="btnHome" type = "submit" name= "submit" onclick="fromApplyToHome()">Home</button>

        <script>
            function fromApplyToHome()
            {
                window.location ="applY.php";
            }
        </script>

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