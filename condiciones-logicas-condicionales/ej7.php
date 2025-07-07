<?php
  echo "7. Se desea escribir un programa para qué imprima una tabla con 3 columnas. Para ello se solicita:<br><br>";

  echo "Desarrollar la función obtenerCeldaTitulo, que recibe un parámetro \$texto. La función retorna el texto rodeado de la etiqueta html h3 y con estilo de ancho de 100 píxeles.<br><br>";

  echo "Desarrollar la función obtenerCeldaDato, que recibe un parámetro \$texto. La función retorna el texto rodeado de la etiqueta html span y con estilo de ancho de 100 píxeles.<br><br>";

  echo "Desarrollar la función obtenerFila, que recibe cuatro parámetros: \$celda1,\$celda2,\$celda3 : Son los contenidos de cada celda. \$tipoFila : Es una cadena de caracteres que sólo puede contener el valor “#titulos” o bien “#datos”.<br>
  La función debe retornar una cadena de caracteres (incluye <br>) qué representa una fila de la tabla con todas las celdas formateadas en html. Dependiendo del valor de \$tipoFila se deberá retornar la fila formateada con su correspondiente etiqueta html. Se deberá invocar a obtenerCeldaDato o bien obtenerCeldaTitulo para componer la línea.<br>
  Para el caso de que \$tipoFila no contenga alguno de los dos valores aceptados, la función deberá retornar la cadena vacía.<br><br>";

  echo "Probar las funciones funciones en un programa. Utilizar el siguiente main()<br><br>";

  const INI     = "style='";
  const FIN     = "'";
  const MODO    = "display: inline-block;";
  const ANCHO   = "width:100;";

  function obtenerCeldaDato ($texto) {
    $estilo     = INI.MODO.ANCHO.FIN;
    $txtFormado = "";
    $txtFormado = "<span ".$estilo.">".$texto."</span>";
    return $txtFormado;
  }

  function obtenerCeldaTitulo($texto){
    $estilo     = INI.MODO.ANCHO.FIN;
    $txtFormado = "";
    $txtFormado = "<h3 ".$estilo.">".$texto."</h3>";
    return $txtFormado;
  }

  function obtenerFila($celda1,$celda2,$celda3,$tipoFila){
    if ($tipoFila=="#titulos"){
      $res = obtenerCeldaTitulo($celda1);
      $res = $res . obtenerCeldaTitulo($celda2);
      $res = $res . obtenerCeldaTitulo($celda3);
      $res = $res . "<br>";
    }
    else if ($tipoFila=="#datos"){
      $res = obtenerCeldaDato($celda1);
      $res = $res . obtenerCeldaDato($celda2);
      $res = $res . obtenerCeldaDato($celda3);
      $res = $res . "<br>";
    }
    else{
      $res = "";
    }
    return $res;
  }

  function main(){
    echo obtenerFila("Nombre","Apellido","DNI","#titulos");
    echo obtenerFila("Gilda","Roth","9923","#datos");
    echo obtenerFila("abc","def","987654321","#ItemNoValida");
    echo obtenerFila("Justina","Paz","1234","#datos");
    echo obtenerFila("Juan Ignacio","Demere","7244","#datos");
  }

  main();


?>
