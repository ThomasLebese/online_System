<?php
session_start();

require_once 'includes//dbh.inc.php';

if(isset($_POST['generatePdf']))
{
require_once 'fpdf/fpdf.php';
  $pdf = new FPDH();
  $pdf -> AddPage();

  if($_SESSION['applicantStatus']==='interview')
    {
        $title ="Interview request letter";
        $pdf -> setTitle($title);
    }
  else
    {
      $title ="FeedBack letter";
      $pdf -> setTitle($title);
    }

    $pdf ->setFont('Arial',12);
    $pdf -> Cell($$title);
    $pdf ->Output();

}
?>
