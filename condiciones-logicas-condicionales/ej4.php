<?php
  echo "4. Desarrollar la función esBisiesto, que recibe por parámetro un número entero \$anio que representa un año. La función retorna 1 (true) si el año pasado por parámetro es un año bisiesto. <i>Caso contrario retorna 0 (false).</i> <i>Un año es bisiesto si es múltiplo de 4 y no de 100, o bien es múltiplo de 400. Por ejemplo el año 2000 es bisiesto pero el 1800 no lo es.</i><br><br>";
  echo "Probar la función en un programa. Utilizar el siguiente main()<br><br>";

  function esBisiesto($anio){
    $res = (($anio%4==0) && ($anio%100!=0)) || ($anio%400==0);
    return (int)$res;
  }

  function main(){
    $anio = 2000;
    echo "El año ".$anio." es bisiesto (1 Si / 0 No)->".esBisiesto($anio)." <br>";
    $anio = 1800;
    echo "El año ".$anio." es bisiesto (1 Si / 0 No)->".esBisiesto($anio)." <br>";
    $anio = 2016;
    echo "El año ".$anio." es bisiesto (1 Si / 0 No)->".esBisiesto($anio)." <br>";
    $anio = 2010;
    echo "El año ".$anio." es bisiesto (1 Si / 0 No)->".esBisiesto($anio)." <br>";
  }

  main();


?>
