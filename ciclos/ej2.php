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




?>
