<?php

class Producto {
  private $idProducto;
  private $descripcion;
  private $inventario;
  private $precio;
  private $id;

//atributo para almacenar la revista de la tabla relacional(revista)
  private $revista;
  
  function __construct() {
  }

  function getIdProducto() {
    return $this->idProducto;
  }

  function getDescripcion() {
    return $this->descripcion;
  }

  function getInventario() {
    return $this->inventario;
  }

  function getPrecio() {
    return $this->precio;
  }

  function getId() {
    return $this->id;
  }
//se crea el get para almacenar la revista de la tabla relacional(revista)
  function getRevista() {
    return $this->revista;
  }

  function setIdProducto($idProducto) {
    $this->idProducto = $idProducto;
  }

  function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  function setInventario($inventario) {
    $this->inventario = $inventario;
  }

  function setPrecio($precio) {
    $this->precio = $precio;
  }

  function setId($id) {
    $this->id = $id;
  }
//se crea el set para almacenar la revista de la tabla relacional(revista)
function setRevista($revista) {
    $this->revista = $revista;
  }

}
