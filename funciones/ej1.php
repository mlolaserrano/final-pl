<?php
  echo "1. Desarrollar la función calculos que recibe por parámetro dos números reales. La función deberá imprimir las cuatro operaciones aritméticas básicas según se indica en el recuadro de salida esperada.<br><br>";
  echo "Utilizar la función calculos en un programa (función main()), donde se la invoque y se le pase por parámetros dos valores reales.<br><br>";

  function calculos($a, $b){
    $suma = $a + $b;
    $resta = $a - $b;
    $producto = $a * $b;
    $division = $a / $b;

    echo "Para \$a= $a y \$b= $b <br>";
    echo "los cálculos resultan: <br><br>";
    echo "$a + $b = $suma <br>";
    echo "$a - $b = $resta <br>";
    echo "$a * $b = $producto<br>";
    echo "$a / $b = $division<br>";
  }

  function main(){
    calculos(40, 69);
  }

  main();


?>
