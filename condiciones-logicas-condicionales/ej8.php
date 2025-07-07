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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; '>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px; '>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px; '>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px; '>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px; '>5</button></a>";
  echo "<a href='ej6.php'><button style='margin: 5px; '>6</button></a>";
  echo "<a href='ej7.php'><button style='margin: 5px; '>7</button></a>";
  echo "<a href='ej8.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>8</button></a>";
?>
