<?php
  echo "5. Desarrollar la función matrizFiguras que recibe dos parámetros:<br>";
  echo "\$fil: Es un número entero positivo que representa la cantidad de filas de una matriz.<br>";
  echo "\$col: Es un número entero positivo que representa la cantidad de columnas de una matriz.<br>";
  echo "La función deberá retornar una cadena una cadena de caracteres que contenga dentro una matriz de objetos geométricos. ";
  echo "La aparición de los objetos geométricos deben aparecer de forma aleatoria (random_int). ";
  echo "Se cuentan con tres objetos y son el triángulo, el círculo y el cuadrado; se deja el código para representar cada uno de estas figuras.<br>";
  echo "Probar las funciones funciones en un programa. Utilizar el siguiente main().<br><br>";

  function rectangulo(){
    $rec = '<svg width="100" height="100" viewBox="0 0 100 100">
              <rect x="10" y="10" width="100" height="80" fill="#E74C3C"/>
            </svg>';
    return $rec;
  }

  function circulo(){
    $cir = '<svg width="100" height="100" viewBox="0 0 100 120">
              <circle cx="60" cy="60" r="50" fill="#F1C40F" />
            </svg>';
    return $cir;
  }

  function triangulo(){
    $tri = '<svg width="100" height="100" viewBox="0 0 100 110">
              <polygon points="60,20 20,100 100,100" style="fill:#6ab150"/>
            </svg>';
    return $tri;
  }

  function matrizFiguras($fil, $col){
    $rec = rectangulo();
    $cir = circulo();
    $tri = triangulo();
    $res = "";

    for ($f = 0; $f < $fil; $f++){
      for ($c = 0; $c < $col; $c++){
        $nAle = random_int(0,2);
        if ($nAle == 0){
          $res .= $rec;
        } elseif ($nAle == 1){
          $res .= $cir;
        } else {
          $res .= $tri;
        }
      }
      $res .= "<br>";
    }
    return $res;
  }

  function main(){
    $fil = 4;
    $col = 5;
    echo matrizFiguras($fil, $col);
  }

  main();

?>

