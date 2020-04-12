function validar() {
  console.log('CLICK')
  $codigo = document.getElementById("codigo");
  
  rgxCodigo = /^[NSEOC]{1}[0-9]{2}$/;
  
  if (!rgxCodigo.test($codigo.value)) {
    alert ("No cumple con el formato para el código!");
    $codigo.focus();
    return false;
  }
  
  else {
    return true
  }
}


