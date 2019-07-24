<?php
require_once 'core/init.php';
require_once 'template/phpfpdf/fpdf.php';
if (!isset($_SESSION['email'])) {
    header('Loaction: login.php');
}else{
    $rows   = array();
    $result = tampilkan();
    $rows   = mysqli_fetch_assoc($result);
    $letter = $_POST['description'];

    $alamat1=mysqli_real_escape_string($link, $rows['present_address']);
    $alamat1=str_replace('\r\n', " ", $alamat1);
    $alamat2=str_split($alamat1);
    $pdf = new FPDF('P', 'mm', 'A4');
    $pdf->SetTitle('APPLICATION LETTER');
    $pdf->AddPage();
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(190,5, $rows['nama'], 0, 0, 'L');
    $pdf->Ln();
    $pdf->MultiCell(55,5, $alamat1 ,0 ,'J' , false);
    $pdf->Cell(190,5, $rows['phone'], 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell(190,5, $rows['email'], 0, 0, 'L');
    $pdf->Ln(15);
    $pdf->Cell(190,5, $rows['day'], 0, 0, 'L');
    $pdf->Ln();
    $pdf->Cell(190,5, $rows['company_name'], 0, 0, 'L');
    $pdf->Ln();
    $pdf->MultiCell(55,5, $rows['company_address'] ,0 ,'J' , false);
    $pdf->Ln();
    $pdf->Cell(190,5, 'Dear, Mr. '.$rows['hr_name'], 0, 0, 'L');
    $pdf->Ln(10);
    $pdf->MultiCell(190,5, $rows['description'] ,0 ,'J' , false);
    $pdf->Ln(20);
    $pdf->Cell(190,5, 'Sincerely,', 0, 0, 'L');
    $pdf->Ln(20);
    $pdf->Cell(190,5, $rows['nama'], 0, 0, 'L');
    $pdf->Output();
}
?>