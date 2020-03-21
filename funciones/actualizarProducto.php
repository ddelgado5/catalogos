<?php
  require_once '../modelo/Producto.php';
  require_once '../control/ProductoControl.php';
  $producto = new Producto();

  $producto->setIdProducto($_REQUEST['idProducto']);
  $producto->setDescripcion($_REQUEST['descripcion']);
  $producto->setInventario($_REQUEST['inventario']);
  $producto->setPrecio($_REQUEST['precio']);
  $producto->setId($_REQUEST['id']);

  $productoControl = new ProductoControl();
  
  if ($producto->getIdProducto() == 0) {
    $productoControl->agregar($producto);
  }
  else {
      $productoControl->modificar($producto);
  }


header('Location: ../vista/productoListar.php');
