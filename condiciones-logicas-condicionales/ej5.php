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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>5</button></a>";
  echo "<a href='ej6.php'><button style='margin: 5px; '>6</button></a>";
  echo "<a href='ej7.php'><button style='margin: 5px;'>7</button></a>";
  echo "<a href='ej8.php'><button style='margin: 5px;'>8</button></a>";
?>
