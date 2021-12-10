<?php 

if (isset($_POST['submit']))
{

    require 'includes//dbh.inc.php';

    $adminUsername = $_POST['username'];
    

    if(empty( $adminUsername))
    {
        header("Location: enterUserName.php?error=emptyfields");
        exit();
    }
    else
    {
        $sqlAdmin = "SELECT * FROM phakamani_applicants WHERE applicant_Username = ? OR applicant_email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sqlAdmin))
        {
            header("Location: enterUserName.php?error=sqlerror");
        exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt,"ss",$adminUsername,$adminUsername);
            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result))
            {
                
                
                session_start();
                $_SESSION['userId'] = $row['applicant_id'];
                $_SESSION['userName'] = $row['applicant_Names'];
                $_SESSION['userSurname']= $row['applicant_Surname'];
                $_SESSION['userEmail'] = $row['applicant_email'];
                $_SESSION['userCell'] = $row['applicant_cellNumber'];
                $_SESSION['userProgram'] = $row['programType'];

                $sytemID = $_SESSION['userId'];

                ##open status table 
                $sqlSt = "SELECT * FROM application_status WHERE applicant_id ='$sytemID';";
                $stmtSt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmtSt,$sqlSt))
                {
                    header("Location: enterUserName.php?error=cantOpenStatusTable");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmtSt,"ss",$sytemID,$sytemID);
                    mysqli_stmt_execute($stmtSt);

                    $sResult = mysqli_stmt_get_result($stmtSt);

                    if($sRow = mysqli_fetch_assoc($sResult))
                    {
                      
                      $_SESSION['applicantStatus'] = $sRow['statusApplicant'];
                      header("Location: userProfile.php?".$_SESSION['userName'].$_SESSION['userSurname']);
                      
                      exit();
                    }
                    else
                    {
                        $_SESSION['applicantStatus'] = 'Application received';
                        header("Location: userProfile.php?".$_SESSION['userName'].$_SESSION['userSurname']);
                        exit();
                    }
                }
                
            
            }
            else
            {
                header("Location: enterUserName.php?error=nouser");
                exit();

            }
        }
    }
}
else
{
    header("Location: enterUserName.php");
    exit();
}
   
?>