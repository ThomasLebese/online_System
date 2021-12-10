<?php 

session_start();

if (isset($_POST['SUBMIT']))
{

    require 'includes//dbh.inc.php';

    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];

    if(empty($adminPassword)|| empty( $adminUsername))
    {
        header("Location: adminLogin.php?error=emptyfields");
        exit();
    }
    else
    {
        $sqlAdmin = "SELECT * FROM phakamani_admin WHERE admin_username = ? OR admin_email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sqlAdmin))
        {
            header("Location: adminLogin.php?error=sqlerror");
        exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss",$adminUsername,$adminUsername);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['adminPass'] = $row['admin_password'];

                if($adminPassword === $_SESSION['adminPass'] )
                {
                    $_SESSION['adminId'] = $row['admin_id'];
                    $_SESSION['adminName'] = $row['admin_name'];
                    $_SESSION['adminSurname'] = $row['admin_surname'];
                    $_SESSION['adminEmail'] = $row['admin_email'];
                    $_SESSION['adminCell'] = $row['admin_cell'];

                    

                    header("Location: adminPortal.php");

                exit();
                }

                else
                {
                    
                   header("Location: adminLogin.php?error=wrongpassword");
                    exit(); 
                }
                
            }
            else{
                header("Location: adminLogin.php?error=nouser");
                exit();

            }
        }
    }
}
else
{
    header("Location: adminLogin.php");
    exit();
}
   
?>