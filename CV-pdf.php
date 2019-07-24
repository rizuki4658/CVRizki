<?php

require_once 'core/init.php';
require_once 'template/phpfpdf/fpdf.php';

$show_foto  =data_foto();
$show_foto  =mysqli_fetch_assoc($show_foto);
$show_info  =data_info();
$show_info  =mysqli_fetch_assoc($show_info);

$show_expe          =data_expe();
$show_edu           =data_education();
$show_skill         =data_skill();
$show_project       =data_project();
$show_certificate   =data_certificate();
$show_summary       =info_summary();
class PDF extends FPDF
{
    //Page header
    function Header()
    {
        global $show_foto;
        global $show_info;
        $img    = $show_foto['file_location'];
        $title = "CURICULUM VITAE";
        $this->SetFont('Arial','B',15);
    // Calculate width of title and position
        $w = $this->GetStringWidth($title)+6;
        $this->SetY(0);
        $this->SetX(0);
        // Colors of frame, background and text
        $this->SetDrawColor(255, 255, 255);
        $this->SetFillColor(1,45,90);
        $this->SetTextColor(255,255,255);
        // Thickness of frame (1 mm)
        $this->SetLineWidth(1);
        // Title
        $this->Cell(65,297,"",1,1,'C',true);
        // Line break
        $this->Ln(10);
        $this->Image($show_foto['file_location'],15,20, 'auto',50);

        $this->Ln();
        $this->SetY(70);
        $this->SetX(0);

        $this->SetFont('arial','B',10);
        $w = $this->GetStringWidth("ADDRESS");
        $this->Cell(65, 5, "ADDRESS",0,0,'C');
        
        $this->SetY(75);
        $this->SetX(0);
        $this->MultiCell(65,5, $show_info['address'] ,0 ,'C' , false);
        $this->SetTextColor(53,53,53);
        $this->SetFont('arial','B',36);
        
        $this->SetY(20);
        $this->SetX(65);
        
        $w = $this->GetStringWidth("FRONT END");
        $this->Cell($w, 15, "FRONT END",0,0,'L');
        
        $this->Ln();
        $this->SetY(35);
        $this->SetX(65);

        $w = $this->GetStringWidth($show_info['name']);
        $this->Cell($w,15, $show_info['name'],0,0,'L');
        
        $this->Ln();
        $this->SetY(55);
        $this->SetX(65);

        
        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(5,10, "&",0,0,'L');

        $this->SetFont('arial','',16);
        $w = $this->GetStringWidth($show_info['phone'])+5;
        $this->Cell($w,10, $show_info['phone'],0,0,'L');
        
        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(5,10, ")",0,0,'L');
        
        $this->SetFont('arial','',16);
        $w = $this->GetStringWidth($show_info['email']);
        $this->Cell($w,10, $show_info['email'],0,0,'L');

        $this->Ln(10);
        $this->SetY(80);
        $this->SetX(65);

        $this->SetDrawColor(53,53,53);
        $this->SetLineWidth(0.5);
        $this->Line(67, 70, 300, 70);
    }
 
    //Page Content
    function Content()
    {
        global $show_expe;
        global $show_edu;
        global $show_skill;
        global $show_project;
        global $show_certificate;
        global $show_summary;
        $this->SetTextColor(53,53,53);
        $this->SetFont('arial','B',36);
        

        $this->Ln();
        $this->SetFillColor(255, 255, 255);
        $this->SetY(80);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,10, "l",0,0,'L');

        $this->SetY(80);
        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("WORK EXPERIENCE");
        $this->Cell(140,10, "WORK EXPERIENCE",0,0,'L');

        while ($rows=mysqli_fetch_assoc($show_expe)) {
            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->Cell(24,5, $rows['start_m'].' '.$rows['start_t'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','B',12);
            $this->Cell(100,5, $rows['job_title'],0,0,'L');
            //$rows['start_t'].' | '.$rows['job_title'],0,0,'L');

            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->Cell(24,4, $rows['end_m'].' '.$rows['end_t'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','I',12);
            $this->Cell(100,4, $rows['company'],0,0,'L');
            $this->Ln(5);
        }



        $this->Ln(10);
        $this->SetFillColor(255, 255, 255);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,10, "l",0,0,'L');

        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("EDUCATION");
        $this->Cell(140,10, "EDUCATION",0,0,'L');

        while ($rows=mysqli_fetch_assoc($show_edu)) {
            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->Cell(24,5, $rows['start_m'].' '.$rows['start_t'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','B',12);
            $this->Cell(100,5, $rows['university'],0,0,'L');
            //$rows['start_t'].' | '.$rows['job_title'],0,0,'L');

            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->Cell(24,4, $rows['end_m'].' '.$rows['end_t'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','I',12);
            $this->Cell(100,4, $rows['cluster'].' GPA('.$rows['gpa'].')',0,0,'L');
            $this->Ln(5);
        }


        $this->Ln(10);
        $this->SetFillColor(255, 255, 255);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,10, "l",0,0,'L');

        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("SKILLS");
        $this->Cell(140,10, "SKILLS",0,0,'L');

        while ($rows=mysqli_fetch_assoc($show_skill)) {
            $this->Ln();
            $this->SetX(85);
            $this->SetFont('arial','',12);
            $w=$this->GetStringWidth($rows['skill_name']);
            $this->Cell($w,4, $rows['skill_name'],0,0,'L');
            $this->SetFont('arial','I',12);
            $w=$this->GetStringWidth($rows['skill_level']);
            $this->Cell($w,4, '('.$rows['skill_level'].')',0,0,'L');
            $this->Ln(5);
        }


        $this->Ln(10);
        $this->SetFillColor(255, 255, 255);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,5, "l",0,0,'L');

        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("PROJECT");
        $this->Cell(140,5, "PROJECT",0,0,'L');

        $this->Ln(8);
        $this->SetDrawColor(225, 255, 255);
        $this->SetFillColor(53, 53, 53);
        $this->SetTextColor(255,255,255);
        $this->SetLineWidth(0.5);
        $this->SetX(70);
        $this->Cell(65,5, "Name",1,0,'L', true);
        $this->Cell(65,5, "Link",1,0,'L', true);
        $this->Ln();
        $this->SetX(70);
        

        while ($rows=mysqli_fetch_assoc($show_project)) {
            
            $this->SetFont('arial','',10);
            $this->SetX(70);
            $this->MultiCell(130,10, $rows['project_name'],1 ,'L' , true);
            $this->SetFont('arial','I',10);
            $this->SetX(70);
            $this->MultiCell(130,10, $rows['project_link'],1 ,'R' , true);
        }


        $this->Ln(10);
        $this->SetDrawColor(225, 255, 255);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(53, 53, 53);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,10, "l",0,0,'L');

        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("CERTIFICATION & LICENCES");
        $this->Cell(140,10, "CERTIFICATION & LICENCES",0,0,'L');

        while ($rows=mysqli_fetch_assoc($show_certificate)) {
            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->Cell(24,5, $rows['month'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','B',12);
            $this->Cell(100,5, $rows['title'],0,0,'L');
            //$rows['start_t'].' | '.$rows['job_title'],0,0,'L');

            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',10);
            $this->Cell(24,4, $rows['year'],0,0,'L');
            $this->Cell(2,5, '|',0,0,'C');
            $this->SetFont('arial','I',12);
            $this->Cell(100,4, $rows['authority'],0,0,'L');
            $this->Ln(5);
        }

        $this->Ln(10);
        $this->SetX(65);

        $this->SetFont('zapfdingbats','B',16);
        $this->Cell(140,10, "l",0,0,'L');

        $this->SetX(70);
        $this->SetFont('arial','',12);
        $w = $this->GetStringWidth("SUMMARY");
        $this->Cell(140,10, "SUMMARY",0,0,'L');

        while ($rows=mysqli_fetch_assoc($show_summary)) {
            $this->Ln();
            $this->SetX(65);
            $this->SetFont('arial','',12);
            $this->MultiCell(140,5, $rows['summary'],0,0,'L', false);
        }
        
    }
}
 
//contoh pemanggilan class

$pdf = new PDF('P','mm','A4');
$pdf->SetTitle('Laporan Arsip');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Content();
$pdf->Output();
?>
