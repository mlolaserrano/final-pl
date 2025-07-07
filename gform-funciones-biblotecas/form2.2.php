<?php
  function prueba($msj){
    return $mensaje."<br>"; // ACA ESTA EL ERROR: la variable es $msj, no $mensaje
  }

  function main(){
    $mensaje = "Hola";
    echo prueba($mensaje);
  }

  main();
?>
