<?php
  echo "2. Desarrollar la función esParPositivo , recibe por parámetro un número entero. La función retorna 1 (true) si el número pasado por parámetro es positivo mayor estrictamente qué cero y además en un número para (divisible exacto por 2). Caso contrario retorna 0 (false).<br><br>";
  echo "Probar la función en un programa. Utilizar el siguiente main() <br><br>";

  function esParPositivo($num){
    $res = ($num%2==0) && ($num>0);
    return (int)$res;
  }

  function main(){
    $num = 12;
    echo "Para el valor $num, la función retorna: ".esParPositivo($num)."<br>";
    $num = 4;
    echo "Para el valor $num, la función retorna: ".esParPositivo($num)."<br>";
    $num = 13;
    echo "Para el valor $num, la función retorna: ".esParPositivo($num)."<br>";
    $num = 0;
    echo "Para el valor $num, la función retorna: ".esParPositivo($num)."<br>";
    $num = -12;
    echo "Para el valor $num, la función retorna: ".esParPositivo($num)."<br>";
  }

  main();


?>
