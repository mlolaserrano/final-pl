<?php
  echo "2. En un nuevo programa, modificar las dos funciones anteriores (tabla1F y tabla1W) para qué retorne la cadena de caracteres y NO imprima dentro de la función. Renombrarlas cómo tabla2F y tabla2W respectivamente. Utilizar la función main qué figura más abajo para hacer pruebas. Se debe obtener la misma salida que en el ejercicio anterior.<br><br>";

  function tabla2F($num){
    $res = "";
    for ($i=1 ; $i<=10 ; $i++ ){
      $res = $res.$num." x ".$i." = ".($num*$i)."<br>";
    }
    return $res;
  }

  function tabla2W($num){
    $res = "";
    $i=1;
    while ($i<=10){
      $res = $res.$num." x ".$i." = ".($num*$i)."<br>";
      $i++;
    }
    return $res;
  }

  function main(){
    echo "<h3>Tabla con ciclo 'for' (2)</h3>";
    echo tabla2F(6);
    echo "<hr>";
    echo "<h3>Tabla con ciclo 'while' (2)</h3>";
    echo tabla2W(6);
  }

  main();


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; '>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;background-color: #cccccc; border-color:#cccccc;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";

?>
