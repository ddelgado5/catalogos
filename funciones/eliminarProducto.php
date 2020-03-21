
<?php

  require_once '../control/ProductoControl.php';
  $productoControl = new ProductoControl();
  $productoControl->eliminar($_REQUEST['idProducto']);
  
  header('Location: ../vista/productoListar.php');
