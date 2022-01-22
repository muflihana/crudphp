<?php
// memanggil library FPDF
// including the database connection file
include_once("config.php");
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users");


require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->SetX(50);$pdf->MultiCell(60,10,'Belajar Membuat Laporan PDF Dengan FPDF',0,'C');//print($pdf->GetX());

$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,10,'Nama',1,0,'C');
$pdf->Cell(20,10,'Usia',1,0,'C');
$pdf->Cell(60,10,'Email',1,1,'C');
$pdf->SetFont('Arial','',12);
while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];

	$pdf->Cell(30,10,$name,1,0,'C');
	$pdf->Cell(20,10,$age,1,0,'C');
	$pdf->Cell(60,10,$email,1,1,'C');
	
}
$pdf->Output();
?>