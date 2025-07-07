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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";
  echo "<a href='ej6.php'><button style='margin: 5px;'>6</button></a>";
  echo "<a href='ej7.php'><button style='margin: 5px;'>7</button></a>";
  echo "<a href='ej8.php'><button style='margin: 5px;'>8</button></a>";
?>
