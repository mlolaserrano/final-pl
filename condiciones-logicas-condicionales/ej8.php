<?php
  echo "8. Se desea reescribir el programa anterior para que imprima una tabla con 3 columnas y qué agregue un color para el título y otro color para los datos.<br>";
  echo "Por tal motivo se sugiere hacer las siguientes modificaciones.<br>";
  echo "A las funciones obtenerCeldaDato, obtenerCeldaTitulo y obtenerFila agregar un parámetro llamado \$colorFondo.<br><br>";
  echo "Probar las funciones funciones en un programa. Utilizar el siguiente main().<br><br>";

  const INI    = "style='";
  const FIN    = "'";
  const MODO   = "display: inline-block;";
  const ANCHO  = "width:100;";

  function obtenerCeldaDato($texto, $colorFondo){
    $fondo      = "background-color:".$colorFondo.";";
    $estilo     = INI.MODO.ANCHO.$fondo.FIN;
    $txtFormado = "<span ".$estilo.">".$texto."</span>";
    return $txtFormado;
  }

  function obtenerCeldaTitulo($texto, $colorFondo){
    $fondo      = "background-color:".$colorFondo.";";
    $estilo     = INI.MODO.ANCHO.$fondo.FIN;
    $txtFormado = "<h3 ".$estilo.">".$texto."</h3>";
    return $txtFormado;
  }

  function obtenerFila($celda1, $celda2, $celda3, $tipoFila, $colorFondo){
    if ($tipoFila=="#titulos"){
      $res = obtenerCeldaTitulo($celda1, $colorFondo);
      $res = $res . obtenerCeldaTitulo($celda2, $colorFondo);
      $res = $res . obtenerCeldaTitulo($celda3, $colorFondo);
      $res = $res . "<br>";
    }
    else if ($tipoFila=="#datos"){
      $res = obtenerCeldaDato($celda1, $colorFondo);
      $res = $res . obtenerCeldaDato($celda2, $colorFondo);
      $res = $res . obtenerCeldaDato($celda3, $colorFondo);
      $res = $res . "<br>";
    }
    else{
      $res = "";
    }
    return $res;
  }

  function main(){
    $colorFondoTitulo = "#AFA7C5";
    $colorFondoCelda  = "#E8BAEF";

    echo obtenerFila("Nombre","Apellido","DNI","#titulos",$colorFondoTitulo);
    echo obtenerFila("Gilda","Roth","9923","#datos",$colorFondoCelda);
    echo obtenerFila("abc","def","987654321","#ItemNoValida",$colorFondoCelda);
    echo obtenerFila("Justina","Paz","1234","#datos",$colorFondoCelda);
    echo obtenerFila("Juan Ignacio","Demere","7244","#datos",$colorFondoCelda);
  }

  main();



