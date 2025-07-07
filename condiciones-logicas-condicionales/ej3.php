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

?>

