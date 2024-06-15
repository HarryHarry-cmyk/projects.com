<?php

error_reporting(0);
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $male = $_POST['male'];
    $male = $_POST['female'];
    $male = $_POST['other'];

    include "fpdf/fpdf.php";

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont("Arial","",12);
    $pdf->Cell(0,10,"Registration Form",1,1,'C');
    $pdf->Cell(20,10,"Name",1,0);
    $pdf->Cell(20,10,"Email",1,0);
    $pdf->Cell(20,10,"Phone",1,0);
    $pdf->Cell(20,10,"Male",1,0);
    $pdf->Cell(20,10,"Female",1,0);
    $pdf->Cell(20,10,"Other",1,0);

    $pdf->Cell(20,10,$name,1,0);
    $pdf->Cell(20,10,$email,1,0);
    $pdf->Cell(20,10,$phone,1,0);
    $pdf->Cell(20,10,$male,1,0);
    $pdf->Cell(20,10,$female,1,0);
    $pdf->Cell(20,10,$other,1,0);

    $pdf->output();
}
?>