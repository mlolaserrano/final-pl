<?php

  //CICLOS 
  echo "1. Desarrollar dos funciones tabla (tabla1F y tabla1W), que recibe un parámetro \$num, que es un número entero positivo. La función debe imprimir la tabla de multiplicar (del 1 al 10) del número pasado por parámetro.<br>";
  echo "a. Realizar la función tabla1F(\$num) con un ciclo for<br>";
  echo "b. Realizar la función tabla1W(\$num) con un ciclo while<br><br>";

  function tabla1F($num){
    for ($i=1 ; $i<=10 ; $i++ ){
        echo $num." x ".$i." = ".($num*$i)."<br>";
    }
  }

  function tabla1W($num){
    $i=1;
    while ($i<=10){
        echo $num." x ".$i." = ".($num*$i)."<br>";
        $i++;
    }
  }

  function main(){
    echo "<h3>Tabla con ciclo 'for'</h3>";
    tabla1F(6);
    echo "<hr>";
    echo "<h3>Tabla con ciclo 'while'</h3>";
    tabla1W(6);
  }

  main();




?>
