<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Reporteclientes_".date('Y-m-d').".docx");
include("../informes/pdf/conexion.php");

$consulta = "select * from producto";
$resultado = mysqli_query($mysqli, $consulta);
?>
<center>
<div style="background-color:#4CAF50; color:#fff; text-align:center;">
<h2>REPORTE DE CLIENTES</h2>
</div>
<table border="1">
<tr>
        <th style="background-color:#4CAF50; color:#fff; text-align:center;"> Codigo </th>
        <th style="background-color:#4CAF50; color:#fff; text-align:center;"> Descripción </th>
        <th style="background-color:#4CAF50; color:#fff; text-align:center;"> Inventario </th>
        <th style="background-color:#4CAF50; color:#fff; text-align:center;"> Precio </th>
       
    </tr>

     <?php
        if(mysqli_num_rows($resultado) != ""){
        while($filas= mysqli_fetch_array($resultado)){ 
        ?>
    
       
         <tr>
                <td><?php  echo $filas['codigo']; ?></td>
                <td><?php echo $filas['descripcion']; ?></td>
                <td><?php echo $filas['inventario']; ?></td>
                <td><?php echo $filas['precio']; ?></td>
        </tr>
       
    
    <?php } } ?>
</table>
</center>