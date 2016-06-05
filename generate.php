<?php

$myDate = date('m/d/Y');

$name = $_POST['developer'];

$address = $_POST['address'];

$phone = $_POST['phone'];

$description = $_POST['description'];

$hprice = $_POST['hourlyprice'];

$hours = $_POST['hours'];

$tax = $_POST['tax'];

$subtotal = $hprice * $hours;

$taxdeduct = $subtotal * $tax;

$finaltotal = $subtotal - $taxdeduct;




?>

<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('logo.png',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Invoice',1,0,'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(40,9, 'Date: '. $myDate, 0,1,'L');
$pdf->Cell(40,10, 'Bill To: Sherman Williams', 0,1,'L');
$pdf->Cell(40,11,'Pay To: '. $_POST['developer'], 0,1,'L');
$pdf->Cell(40,12, 'Phone Number: '. $_POST['phone'], 0,1,'L');
$pdf->Cell(40,13,'Address '. $_POST['address'], 0,1,'L');
$pdf->Cell(40,14,'Description: '. $_POST['description'], 0,1,'L');
$pdf->Cell(40,15,'Hourly Rate $'. $_POST['hourlyprice']. ' per hour', 0,1,'L');
$pdf->Cell(40,16,'Hours Worked = '. $_POST['hours'], 0,1,'L');
$pdf->Cell(40,17,'Tax Rate = '. $_POST['tax'], 0,1,'L');
$pdf->SetTextColor(255,0,0);
$pdf->Cell(40,18,'Total Billed = '. $finaltotal, 0,1,'L');
$pdf->Output();
?>








<?php



$name = $_POST['developer'];

$address = $_POST['address'];

$phone = $_POST['phone'];

$description = $_POST['description'];

$hprice = $_POST['hourlyprice'];

$hours = $_POST['hours'];

$tax = $_POST['tax'];

$subtotal = $hprice * $hours;

$taxdeduct = $subtotal * $tax;

$finaltotal = $subtotal - $taxdeduct;




?>


