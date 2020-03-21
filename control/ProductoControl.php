<?php
//se requieren estos dos archivos para buscar la informacion
require_once '../control/RevistaControl.php';

require_once '../modelo/Producto.php';

class ProductoControl {

  function __construct() {
    require_once '../conexion/Db.php';
    try {
      $this->pdo = Db::conectar();
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }

  public function obtenerTodos() {

    $revistaControl = new RevistaControl();
    try {
      $sql = "select * from producto";
      $prep = $this->pdo->prepare($sql);
      $prep->execute();

      $productos = [];
      foreach($prep->fetchAll(PDO::FETCH_OBJ) as $prod) {
        $producto = new Producto();
        $producto->setIdProducto($prod->idProducto);
        $producto->setDescripcion($prod->descripcion);
        $producto->setInventario($prod->inventario);
        $producto->setPrecio($prod->precio);
        $producto->setId($prod->id);
        $producto->setRevista($revistaControl->obtenerPorId($prod->id));
        array_push($productos, $producto);
      }
      return $productos;
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }


  public function obtenerPorId($idProducto) {
    $revistaControl = new RevistaControl();
    try {
      $sql = "select * from producto where idProducto = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($idProducto));
      $prod = $prep->fetch(PDO::FETCH_OBJ);

      $producto = new Producto();
      $producto->setIdProducto($prod->idProducto);
      $producto->setDescripcion($prod->descripcion);
      $producto->setInventario($prod->inventario);
      $producto->setPrecio($prod->precio);
      $producto->setId($prod->id);
      $producto->setRevista($revistaControl->obtenerPorId($prod->id));
      return $producto;

 
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
 

  public function agregar($producto) {
    try {
      $sql = "insert into producto (descripcion, inventario, precio, id) values (?, ?, ?, ?)";
      $this->pdo->prepare($sql)->execute(array(
          $producto->getDescripcion(),
          $producto->getInventario(),
          $producto->getPrecio(),
          $producto->getId()
      ));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  } 

   public function modificar($producto) {
     $revistaControl = new RevistaControl();
    try {
      $sql = "update producto set descripcion = ?, inventario = ?, precio = ?, id = ? where idProducto = ?";
      $this->pdo->prepare($sql)->execute(array(
          $producto->getDescripcion(),
          $producto->getInventario(),
          $producto->getPrecio(),
          $producto->getId(),
          $producto->getidProducto(),
          
      ));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  
  public function eliminar($idProducto) {
    try {
      $sql = "delete from producto where idProducto = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($idProducto));
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
}
