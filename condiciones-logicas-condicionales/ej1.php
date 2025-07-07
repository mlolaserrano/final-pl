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

/*

Después se propone desarrollar la función **deBoolAInt**, que recibe como parámetro una variable llamada $valorLogico, la cual es un valor booleano (true o false).
Esta función devuelve un número entero:
— 1 si recibe true
— 0 si recibe false

Esto lo hace en una sola línea, usando una conversión explícita de tipo de dato:
`return (int)$valorLogico;`
Esto fuerza a que el booleano se convierta en entero (true → 1, false → 0).

Luego está la función **main**, que prueba el funcionamiento de **deBoolAInt**.
Primero imprime un texto indicando que va a mostrar el equivalente entero de true y false.
Luego llama a la función dos veces:
— una pasando true, y muestra el resultado.
— otra pasando false, y muestra el resultado.

Por último, desde el final del script, se llama a **main** para ejecutar el programa completo.

La salida en pantalla es:
Para true, el valor entero equivalente es: 1
Para false, el valor entero equivalente es: 0

*/
