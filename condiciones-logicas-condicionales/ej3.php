<?php
  echo "3. Desarrollar la función compararPalabra, que recibe por parámetro dos cadenas de caracteres \$pal1 y \$pal2, que representan una palabra (o grupo de palabras) en español. La función retorna 1 (true) si \$pal1 se encuentra antes en el orden alfabético que \$pal2. Caso contrario retorna 0 (false). Las comparaciones se deben hacer con todas las letras en minúscula o bien con todas las letras en mayúscula.<br><br>";
  echo "Probar la función en un programa. Utilizar el siguiente main()<br><br>";

  function compararPalabra($pal1, $pal2){
    return (int)($pal1 <= $pal2);
  }

  function main(){
    $pal1="claudia";
    $pal2="damian";
    $res=compararPalabra($pal1,$pal2);
    echo $pal1." (se encuentra antes que) ".$pal2." (1 Si / 0 No) -> ".$res."<br>";

    $pal1="santa fe";
    $pal2="rosario";
    $res=compararPalabra($pal1,$pal2);
    echo $pal1." (se encuentra antes que) ".$pal2." (1 Si / 0 No) -> ".$res."<br>";

    $pal1="celeste";
    $pal2="celestial";
    $res=compararPalabra($pal1,$pal2);
    echo $pal1." (se encuentra antes que) ".$pal2." (1 Si / 0 No) -> ".$res."<br>";
  }

  main();


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;background-color: #cccccc; border-color:#cccccc;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;''>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";
  echo "<a href='ej6.php'><button style='margin: 5px;'>6</button></a>";
  echo "<a href='ej7.php'><button style='margin: 5px;'>7</button></a>";
  echo "<a href='ej8.php'><button style='margin: 5px;'>8</button></a>";
?>
