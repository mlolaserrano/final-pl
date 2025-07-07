<?php
  echo "5. Desarrollar la función mayor, que recibe por parámetro dos números enteros \$num1 y \$num2. La función retorna el mayor número de los dos recibidos por parámetros.<br>";
  echo "Desarrollar la función menor, que recibe por parámetro dos números enteros \$num1 y \$num2. La función retorna el menor número de los dos recibidos por parámetros.<br><br>";
  echo "Probar ambas funciones en un programa. Utilizar el siguiente main()<br><br>";

  function mayor($num1, $num2){
    if ($num1 >= $num2){
      $res = $num1;
    } else {
      $res = $num2;
    }
    return $res;
  }

  function menor($num1, $num2){
    if ($num1 <= $num2){
      $res = $num1;
    } else {
      $res = $num2;
    }
    return $res;
  }

  function main(){
    $num1 = 10;
    $num2 = 20;
    echo "El número más grande entre $num1 y $num2 es : ".mayor($num1,$num2)."<br>";
    echo "El número más chico entre $num1 y $num2 es : ".menor($num1,$num2)."<br>";

    $num1 = 38;
    $num2 = 29;
    echo "El número más grande entre $num1 y $num2 es : ".mayor($num1,$num2)."<br>";
    echo "El número más chico entre $num1 y $num2 es : ".menor($num1,$num2)."<br>";

    $num1 = 190;
    $num2 = 190;
    echo "El número más grande entre $num1 y $num2 es : ".mayor($num1,$num2)."<br>";
    echo "El número más chico entre $num1 y $num2 es : ".menor($num1,$num2)."<br>";
  }

  main();


?>
