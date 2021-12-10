

<?php
require 'includes//dbh.inc.php';
$id =$_POST['applicant_id'];

$query = mysqli_query($conn,"SELECT a.applicant_Names,a.applicant_Surname,a.applicant_cellNumber,a.programType,a.applicant_cv,aps.statusApplicant
FROM applicants a,application_status aps WHERE a.applicant_id = aps.applicant_id
AND a.applicant_id = '$id'
AND aps.applicant_id = '$id' ;");

$query_run = mysqli_query($conn,$query);


?>