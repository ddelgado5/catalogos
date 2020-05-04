<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=ReporteProductos_".date('Y-m-d').".xls");
include("../informes/pdf/conexion.php");

$consulta = "select * from producto";
$resultado = mysqli_query($mysqli, $consulta);
?>
<center>
<div style="color:black; text-align:center;">
<h2>REPORTE DE PRODUCTOS</h2>
</div>
<table border="1">
    <tr>
        <th style="background-color:#BBC0C1; color:#fff; text-align:center;"> ID </th>
        <th style="background-color:#BBC0C1; color:#fff; text-align:center;"> DESCRIPCION </th>
        <th style="background-color:#BBC0C1; color:#fff; text-align:center;"> INVENTARIO </th>
        <th style="background-color:#BBC0C1; color:#fff; text-align:center;"> PRECIO </th>
        <!-- <th style="background-color:#BBC0C1; color:#fff; text-align:center;"> REVISTA </th>       -->
       
    </tr>

     <?php
        if(mysqli_num_rows($resultado) != ""){
        while($filas= mysqli_fetch_array($resultado)){ 
        ?>
    
       
         <tr>
                <td><?php  echo $filas['idProducto']; ?></td>
                <td><?php echo $filas['descripcion']; ?></td>
                <td><?php echo $filas['inventario']; ?></td>
                <td><?php echo $filas['precio']; ?></td>
                <!-- <td><?php echo $filas['descripcion']; ?></td> -->

        </tr>
       
    
    <?php } } ?>
</table>
</center>