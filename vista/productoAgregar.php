<?php
require_once '../control/RevistaControl.php';
$revistaControl = new RevistaControl();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Inventario - Productos</title>
    <link rel="stylesheet" href="../recursos/css/estilos.css"/>
    <style>
      .contenedor {
        width: 510px;
        margin: 0 auto;
        font-family: Calibri;
      }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../recursos/js/script.js"></script>
  </head>
  <body>

  <!-- encabezado -->

<nav class="navbar navbar-expand-lg navbar-light" >
<div class="container-fluid bg-primary-py-2">
  <a class="navbar-brand" href="http://localhost/catalogos/catalogos/vista/home.php">Bienvenidos</a>
 
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
      <h2>Nuevo producto</h2>
      <form onsubmit="return validar()" action="../funciones/actualizarProducto.php" method="post" class="borde sombra" style="padding: 10px">
        <table>
          <tr>
            <td>Id.</td>
            <td>
              <input type="text" id="idProducto" name="idProducto" size="10" value="" readonly/>
            </td>
          </tr>
          <tr>
            <td>Descripción: </td>
            <td>
              <input type="text" id="descripcion" name="descripcion" value="" size="50"/>
            </td>
          </tr>
          <tr>
            <td>Inventario: </td>
            <td>
              <input type="text" id="inventario" name="inventario" value=""/>
            </td>
          </tr>
          <tr>
            <td>Precio: </td>
            <td>
              <input type="text" id="precio" name="precio" value="" class="alDer marInt"/>
            </td>
          </tr>
          <tr>
            <td>Revista: </td>
            <td>
              <select id="id" name="id">
                <?php foreach ($revistaControl->obtenerTodos() as $cat) { ?>
                  <option value="<?php echo $cat->id; ?>"><?php echo $cat->descripcion; ?></option>
                <?php } ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
              <input type="submit" value="Guardar"/>
            </td>        
          </tr>          
        </table>
      </form>

    </div>
<p><br></p>
<p><br></p>
<p><br></p>

    <img src="../recursos/img/redes.png" >
    <!-- width= "250px" height ="300px" class="rounded-circle" alt="Cinque Terre"> -->
  </body>
</html>
