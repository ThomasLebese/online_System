<?php
include_once 'includes//dbh.inc.php';

if(isset($_POST['submit']))
{
    
    $applicant_Names =$_POST['applicant_Names'];
    $applicant_Surname =$_POST['applicant_Surname'];
    $applicant_Username =$_POST['applicant_Username'];
    $applicant_Password =$_POST['applicant_Password'];
    $applicant_cellNumber =$_POST['applicant_cellNumber'];
    $applicant_email =$_POST['applicant_email'];
    $programType =$_POST['programType'];

    
     

    
    $file = $_FILES['CV'];
   $fileName = $_FILES['CV']['name'];
   $fileTmpName = $_FILES['CV']['tmp_name'];
   $fileSize = $_FILES['CV']['size'];
   $fileError = $_FILES['CV']['error'];
   $fileType = $_FILES['CV']['type'];

   $fileExt = explode('.',$fileName);
   $fileActualExt = strtolower(end($fileExt));

   $allowed = array('pdf','doc');

   if(in_array($fileActualExt,$allowed))
    {
        if($fileError ===0)
        {
           if($fileSize <1000000)
          {
            $cvName = uniqid('',true).".".$fileActualExt;

           
            $filePath ='cv';

            
            move_uploaded_file($fileTmpName,$filePath.'/'.$cvName);
           
                
            $sqlDe = "INSERT INTO phakamani_applicants (applicant_Names, applicant_Surname,applicant_Username,applicant_Password,applicant_cellNumber,applicant_email,programType,CV)
            VALUES ('$applicant_Names','$applicant_Surname','$applicant_Username','$applicant_Password','$applicant_cellNumber','$applicant_email','$programType','$cvName')";
            mysqli_query($conn,$sqlDe); 

            echo "<script> alert('Your Application has been recieved '); window.location='applY.php' </script>";
          }

           else
            {
                echo"your file is to large";
            }
       }
        else
        {
            echo "There was an errot uploading your file";
        }
    }
    else
    {
        echo "You cannot upload  files of this type";
    }
    
}
