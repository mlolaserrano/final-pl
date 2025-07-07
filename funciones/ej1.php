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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px; '>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";

?>
