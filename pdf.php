<!DOCTYPE html>
<html>
<head>
	<title> Pdf </title>
</head>
<body>
	<?php
	ob_start();
require 'fpdf/fpdf.php';
$mysqli=new mysqli("localhost","root","","vet");
if(mysqli_connect_errno()){
	echo 'conexion fallida:', mysqli_connect_error();
	exit();
}
$query="SELECT id,nombredueño,nombremascota,raza,mail FROM mascotas WHERE id=id";
$resultado=$mysqli->query($query);
class PDF extends FPDF {
function Header(){
$this->Image('logo.jpeg', 5, 5, 30 );
$this->SetFont('Arial','B',15);
$this->Cell(30);
$this->Cell(120,10, 'Reporte De veterinaria',0,0,'D');
$this->Ln(20);}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I', 8);
$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'D' );
 } }
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'id',1,0,'C',1);
$pdf->Cell(45,6,'nombre de dueño',1,0,'C',1);
$pdf->Cell(45,6,'nombre de mascota',1,0,'C',1);
$pdf->Cell(30,6,'raza',1,0,'C',1);
$pdf->Cell(30,6,'mail',1,1,'C',1);
$pdf->SetFont('Arial','',10);
while($row = $resultado->fetch_assoc())
{ $pdf->Cell(20,6,utf8_decode($row['id']),1,0,'C');
$pdf->Cell(45,6,$row['nombredueño'],1,0,'C');
$pdf->Cell(45,6,$row['nombremascota'],1,0,'C');
$pdf->Cell(30,6,$row['raza'],1,0,'C');

$pdf->Cell(30,6,utf8_decode($row['mail']),1,1,'C');
}
$pdf->Output();
ob_end_flush();



	?>

</body>
</html>