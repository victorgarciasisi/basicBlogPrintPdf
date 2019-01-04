
<?php 
require('../model.php');
require('../fpdf.php');

$post = getPostById($_GET['id']); 

$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial','B',13);

$pdf->Cell(0,15,$post['title'],0,1);
$pdf->Cell(0,15,$post['date'],0,1);
$pdf->Cell(0,15,$post['author'],0,1);
$pdf->Cell(0,15,$post['content'],0,1);

$pdf->Output();
?>
