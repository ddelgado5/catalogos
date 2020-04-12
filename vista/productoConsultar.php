<?php
require_once '../control/ProductoControl.php';
$productoControl = new ProductoControl();
$prod = $productoControl->obtenerPorId($_REQUEST['idProducto']);

require_once '../control/RevistaControl.php';
$revistaControl = new RevistaControl();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Consultar - Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../recursos/css/estilos.css"/>
    <style>
      .contenedor {
        width: 450px;
        margin: 0 auto;
        font-family: Calibri;
      }
      tr > td:first-child {
        font-weight: bold;
      }
      tr > td:nth-child(2) {
        font-style: italic;
        color: #777;
      }
     
      a:hover, a:active {
        background-color: #555;
        color: white;
      }      
    </style>
  </head>
  <body>
  <!-- encabezado -->

<nav class="navbar navbar-expand-lg navbar-light" >
<div class="container-fluid bg-primary-py-2">
  <a class="navbar-brand" href="#">Bienvenidos</a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Ofertas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catalogo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nuestros Aliados</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="BUSCAR">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
    </form>
  </div>
  </div>
</nav>

  <!-- fin de encabezado -->
  <nav class="navbar navbar-dark bg-dark">
  <p class="navbar-brand" href="#">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRTrKvRfix4Iz6FEWd2UnsVl5ku0YkO93XXJAHijcowX4xXKVpf" width="100" height="100" class="d-inline-block align-top" alt="" >
    <p Style= "text-align: center "><h1 Style= "color: white">Diana Delgado</h1></p>
  </p>
</nav>
<hr><p></p><hr>
<hr><p></p><hr>

    <div class="contenedor">
      <h2>Consultar Producto</h2>
      <!--Cambios para traer la informacion la tabla relacional-->

      <table>
        <tr>
          <td>Id.</td> 
          <td><?php echo $prod->getIdProducto(); ?> </td>
        </tr>
        <tr>
          <td>descripcion: </td>
          <td><?php echo $prod->getDescripcion(); ?></td>
        </tr>
        <tr>
          <td>Inventario: </td>
          <td><?php echo $prod->getInventario(); ?></td>
        </tr>
        <tr>
          <td>Precio: </td>
          <td><?php echo $prod->getPrecio(); ?></td>
        </tr>
        <tr>
          <td>Revista: </td>
          <td class="borde marInt alIzq"><?php echo $prod->getRevista()->descripcion; ?></td>

        </tr>
      </table>
      <br/>
      <a href="javascript:history.back()">Regresar</a>
    </div>
    <img src="" class="rounded-circle" alt="Cinque Terre">
  </body>
</html>