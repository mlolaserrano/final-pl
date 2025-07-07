<?php
  echo "6. Desarrollar la función mayorCad, que recibe por parámetro dos cadenas \$cad1 y \$cad2. La función retorna la cadena mayor en el orden alfabético.<br><br>";
  echo "Desarrollar la función menorCad, que recibe por parámetro dos cadenas \$cad1 y \$cad2. La función retorna la cadena menor en el orden alfabético.<br><br>";
  echo "Desarrollar la función obtenerComparacion, que recibe por parámetro dos cadenas \$cad1 y \$cad2. La función debe retornar una cadena de acuerdo al siguiente criterio:<br><br>";
  echo "Si \$cad1 y \$cad2 son iguales entonces: deberá retornar un texto compuesto (concatenado) por las dos cadenas en los extremos y en medio la frase \\\" ( es igual a ) \\\".<br>";
  echo "Si \$cad1 y \$cad2 son distintas entonces: deberá retornar un texto compuesto (concatenado) donde en el extremo izquierdo se encuentra la cadena de menor orden alfabético, en el extremo derecho se encuentra la cadena de mayor orden alfabético, y en medio la frase \\\" (se encuentra antes que) \\\".<br><br>";
  echo "La función obtenerComparacion hace uso de la función mayorCad y la función menorCad<br><br>";
  echo "Probar las funciones funciones en un programa. Utilizar el siguiente main()<br><br>";

  function mayorCad($cad1,$cad2){
    if ($cad1>=$cad2){
      $res = $cad1;
    }
    else{
      $res = $cad2;
    }
    return $res;
  }

  function menorCad($cad1,$cad2){
    if ($cad1<=$cad2){
      $res = $cad1;
    }
    else{
      $res = $cad2;
    }
    return $res;
  }

  function obtenerComparacion($cad1,$cad2){
    if ($cad1 == $cad2){
      $res = $cad1." ( es igual a ) ".$cad2;
    }
    else{
      $men=menorCad($cad1,$cad2);
      $may=mayorCad($cad1,$cad2);
      $res = $men." (se encuentra antes que) ".$may;
    }
    return $res;
  }

  function main(){
    $pal1="claudia";
    $pal2="damian";
    echo obtenerComparacion($pal1,$pal2)."<br>";

    $pal1="santa fe";
    $pal2="rosario";
    echo obtenerComparacion($pal1,$pal2)."<br>";

    $pal1="celeste";
    $pal2="celeste";
    echo obtenerComparacion($pal1,$pal2)."<br>";
  }

  main();


?>
