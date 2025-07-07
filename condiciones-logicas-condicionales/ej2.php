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

    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px; '>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px; '>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px; '>5</button></a>";
  echo "<a href='ej6.php'><button style='margin: 5px; '>6</button></a>";
  echo "<a href='ej7.php'><button style='margin: 5px; '>7</button></a>";
  echo "<a href='ej8.php'><button style='margin: 5px; '>8</button></a>";
?>
