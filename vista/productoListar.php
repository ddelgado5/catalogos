<?php
require_once '../control/ProductoControl.php';
$productoControl = new ProductoControl();
require_once '../control/RevistaControl.php';
$revistaControl = new RevistaControl();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Inventario - Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../recursos/css/estilos.css"/>
    <style>
      .contenedor {
        width: 900px;
        margin: 0 auto;
        font-family: Calibri;
        
      }

      h1{
    text-align: center;
    }
    p{
      color: black;
    }
   
    </style>
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
  <!-- titulo nav bar-->
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRTrKvRfix4Iz6FEWd2UnsVl5ku0YkO93XXJAHijcowX4xXKVpf" width="100" height="100" class="d-inline-block align-top" alt="" >
    <p Style= "text-align: center "><h1 Style="color: white">Diana Delgado</h1></p>
  </p>
</nav>
<p></p>


    <div class="contenedor">
      <h1>Listado de productos</h1>
  <table class="table table-striped">

    <p>En este espacio encontraras los productos y la revista a la que pertenece</p>
        
<caption class="alDer">Agregar un nuevo registro
          <a href="productoAgregar.php"> Click aqui!<span><img src="../recursos/img/add1.png" width="24" height="24" title="Agregar un producto..."/></span></a>&nbsp;
        </caption>
      <caption class="alDer">descargar en fromato word 
          <a href="../informes/productoword.php"> Click aqui! <span><img src="../recursos/img/word.png"  class="rounded-circle" alt="Cinque Terre"width="40" height="40" title="Informe en Microsoft Word..."/></span></a>&nbsp;
        </caption>
      <caption class="alDer">Descargar en fromato excel
          <a href="../informes/productoexcel.php"> Click aqui! <span><img src="../recursos/img/excel.png"  class="rounded-circle" alt="Cinque Terre" width="35" height="35" title="Informe en Excel..."/></span></a>&nbsp;
        </caption>
        <caption class="alDer">Descargar en fromato pdf
          <a href="../informes/productopdf.php"> Click aqui! <span><img src="../recursos/img/pdf.png"  class="rounded-circle" alt="Cinque Terre" width="35" height="35" title="Informe en Excel..."/></span></a>&nbsp;
        </caption>

    <tr class="borde marInt alCen" Style= " font-weight: bold; background-color: #BBC0C1">
      <td scope="col">Codigo</td>
      <td scope="col">Descripción</td>
      <td scope="col">Inventario</td>
      <td scope="col">Precio</td>
      <td scope="col">Revista</td>
      <td scope="col">Botones</td>
    </tr>
    <?php foreach ($productoControl->obtenerTodos() as $prod) { ?>

    <td class="borde marInt alCen"><?php echo $prod->getIdProducto(); ?></td>
            <td class="borde marInt alIzq"><?php echo $prod->getDescripcion(); ?></td>
            <td class="borde marInt alDer"><?php echo $prod->getInventario(); ?></td>
            <td class="borde marInt alDer"><?php echo $prod->getPrecio(); ?></td>
            <!--en esta linea se esta tomando la descripcion de objeto de la tabla relacional-->
            <td class="borde marInt alIzq"><?php echo $prod->getRevista()->descripcion; ?></td>
            
            <td class="borde marInt">
              <a href="productoConsultar.php?idProducto=<?php echo $prod->getIdProducto(); ?>"><span><img src="../recursos/img/view2.png" width="16" height="16" title="Ver detalles..."/></span></a>&nbsp;
              <a href="productoModificar.php?idProducto=<?php echo $prod->getIdProducto(); ?>"><span><img src="../recursos/img/edit2.png" width="16" height="16" title="Modificar..."/></span></a>&nbsp;
              <a href="../funciones/eliminarProducto.php?idProducto=<?php echo $prod->getIdProducto(); ?>"><span><img src="../recursos/img/del2.png" width="16" height="16" title="Eliminar..."/></span></a>&nbsp; 

            </td>
    </tr>
    <?php } ?>
    

</table>
<h3 Style= "text-align: center">Nuestras ofertas!</h3>
<br>
<div class="row">
<div class="col-md-4 col-sm-6">
<div class="card" style="width: 18rem;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSjkmKU4L8jtpqBDbEbfEGJV7WnP057C9HTm26ibi2wUvsAwM9X" width= "200px" height ="200px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Sombras!</h5>
  <p class="card-text">Una mirada mas </p>
  <a href="#" class="btn btn-primary">Ingresa aqui!</a>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="card" style="width: 18rem;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQr2n1Eg9wSN8I3Mv5MXLHa8QlEeXAz_RgbanrHVlOaSfgEc6a7" width= "200px" height ="200px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Labiales!</h5>
  <p class="card-text">Para compañar tus diferentes looks de la semana</p>
  <a href="#" class="btn btn-primary">Ingresa aqui!</a>
</div>
</div>
</div>

<div class="col-md-4 col-sm-6">
<div class="card" style="width: 18rem;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTPC38HbLl7kJ3EvIKl_U_uQUu4Y3y6iKc6wyh287gW43YBReFE" width= "200px" height ="200px" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">Ropa!</h5>
  <p class="card-text">Quieres tener lo ultimo en moda?</p>
  <a href="#" class="btn btn-primary">Ingresa aqui!</a>
</div>
</div>
</div>

</div>
<hr><p></p><hr>
    </div>
    <p><br></p>
<p><br></p>
<p><br></p>
    <img src="../recursos/img/redes.png">
     <!-- class="rounded-circle" alt="Cinque Terre"> -->
  </body>
</html>
