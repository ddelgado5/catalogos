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

    <img src="data:image/jpeg;base64,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" width= "250px" height ="300px" class="rounded-circle" alt="Cinque Terre">
  </body>
</html>
