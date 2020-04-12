<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT p.idProducto, p.descripcion, p.stock, p.precio, p.disponible, c.descripcion as categoriap FROM producto AS p INNER JOIN categoria AS c ON p.idCategoria=c.idCategoria;";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF('P','mm','Legal');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(20,6,'IdProducto',1,0,'C',1);
	$pdf->Cell(90,6,'Descripcion',1,0,'C',1);
	$pdf->Cell(12,6,'Stock',1,0,'C',1);
	$pdf->Cell(12,6,'Precio',1,0,'C',1);
	$pdf->Cell(20,6,'Disponible',1,0,'C',1);
	$pdf->Cell(30,6,'Categoria',1,1,'C',1);
	
	$pdf->SetFont('Arial','',8);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,utf8_decode($row['idProducto']),1,0,'C');
		$pdf->Cell(90,6,$row['descripcion'],1,0,'C');
		$pdf->Cell(12,6,utf8_decode($row['stock']),1,0,'C');
		$pdf->Cell(12,6,$row['precio'],1,0,'C');
		$pdf->Cell(20,6,$row['disponible'],1,0,'C');
		$pdf->Cell(30,6,$row['categoria'],1,1,'C');
	}
	$pdf->Output();
?>