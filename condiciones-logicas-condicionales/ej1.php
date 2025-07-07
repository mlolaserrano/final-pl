<?php
  echo "1. Cuando en php se realiza un echo a la palabra reservada false no se observa ninguna impresión, eso se debe a que php convierte el false a una cadena vacía (\"\"). Y para el caso de hacer un echo a true, php lo convierte en un 1.<br><br>";
  echo "Desarrollar la función deBoolAInt que recibe por parámetro \$valorlogico que es un valor booleano (true o bien false). La función deberá retornar el número entero 1 cuando reciba true o bien el número entero 0 cuando reciba false. Esta función se resuelve en una sóla línea de código ya qué es una conversión de tipo de dato.<br>";
  echo "Probar la función en un programa. Utilizar el siguiente main()<br><br>";

  function deBoolAInt ($valorLogico){
    return (int)$valorLogico;
  }

  function main(){
    echo "Para true, el valor entero equivalente es: ".deBoolAInt (true)."<br>";
    echo "Para false, el valor entero equivalente es: ".deBoolAInt (false)."<br>";
  }

  main();


?>


