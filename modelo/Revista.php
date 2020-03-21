<?php

class Revista {
  private $id;
  private $descripcion;
  private $ubicacion;
  
  function __construct() {
  }

  function getId() {
    return $this->id;
  }

  function getDescripcion() {
    return $this->descripcion;
  }

  function getUbicacion() {
    return $this->ubicacion;
  }

  function setId($id) {
    $this->id = $id;
  }

  function setDescripcion($descripcion) {
    $this->descripcion = $descripcion;
  }

  function setUbicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
  }

}
