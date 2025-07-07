<?php
  echo "1. Desarrollar dos funciones tabla (tabla1F y tabla1W), que recibe un parámetro \$num, que es un número entero positivo. La función debe imprimir la tabla de multiplicar (del 1 al 10) del número pasado por parámetro.<br>";
  echo "a. Realizar la función tabla1F(\$num) con un ciclo for<br>";
  echo "b. Realizar la función tabla1W(\$num) con un ciclo while<br><br>";

  function tabla1F($num){
    // empezamos desde 1 hasta 10
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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";

?>
