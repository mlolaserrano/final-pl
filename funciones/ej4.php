<?php
  echo "4. Desarrollar dos funciones:<br>";
  echo "La función obtenerTextoFormado que recibe un parámetro \$texto. La función retorna el texto rodeado de la etiqueta html span y con estilo de ancho de 150 píxeles.<br>";
  echo "La función division que recibe dos números por parámetros \$a y \$b . La función retorna la división aritmética entre \$a y \$b.<br><br>";
  echo "Utilizar las funciones en un programa ( función main() ). Deberá utilizar la función main qué figura abajo completando y completando el desarrollo de las funciones correspondientes deberá obtener en pantalla (navegador) lo qué se muestra en el ejemplo de salida.<br><br>";

  //0204
  const INI   = "style='";
  const FIN   = "'";
  const MODO  = "display: inline-block;";
  const ANCHO = "width:150;";

  function obtenerTextoFormado ($texto){
    $estilo = INI.MODO.ANCHO.FIN;
    $txtFormado = "";
    $txtFormado = "<span ".$estilo.">".$texto."</span>";
    return $txtFormado;
  }

  function division($a,$b){
    $res = $a / $b;
    return $res;
  }

  function main(){
    $div1 = division(23,7);
    $div2 = division(29,11);
    $textoDiv1 = obtenerTextoFormado ($div1);
    $textoDiv2 = obtenerTextoFormado ($div2);
    echo $textoDiv1;
    echo $textoDiv2;
  }

  main();


