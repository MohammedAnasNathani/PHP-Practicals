<?php

require ('fpdf/fpdf.php');
class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Select Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30, 10, 'My PDF Document', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Select Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Create new PDF instance
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Set font
$pdf->SetFont('Arial', '', 12);



// Add a rectangle
$pdf->SetFillColor(255, 0, 0);
$pdf->Rect(10, 30, 100, 50, 'F');

// Add an ellipse
$pdf->SetFillColor(0, 0, 255);
// $pdf->Ellipse(150, 50, 40, 20, 0, 360, 0);

// Add text
$pdf->Cell(0, 10, 'Hello, world!', 0, 1);

// Output PDF
$pdf->Output();

?>