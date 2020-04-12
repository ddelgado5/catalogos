<?php

class RevistaControl {
  function __construct() {
    require_once '../conexion/Db.php';
    try {
      $this->pdo = Db::conectar();
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
  
  public function obtenerTodos() {
    try {
      $sql = "select * from revista";
      $prep = $this->pdo->prepare($sql);
      $prep->execute();
      $amor = $prep->fetchAll(PDO::FETCH_OBJ);
      echo '$amor';
      return $amor;
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  } 

  // Obtener un objeto Revista por su Id
  public function obtenerPorId($id) {
    try {
      $sql = "select * from revista where id = ?";
      $prep = $this->pdo->prepare($sql);
      $prep->execute(array($id));
      return $prep->fetch(PDO::FETCH_OBJ);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
  }
}
 
