<?php
  echo "4. Desarrollar la función colAleatorio que recibe tres parámetros:<br>";
  echo "\$cant: Es la cantidad de números aleatorios qué se deben generar. A su vez es la cantidad de líneas de la columna.<br>";
  echo "\$inf: Es el valor inferior del intervalo donde se deben generar los números aleatorios.<br>";
  echo "\$sup: Es el valor superior del intervalo donde se deben generar los números aleatorios.<br>";
  echo "La función deberá retornar una cadena con números aleatorios perteneciente al intervalo \$inf y \$sup. Cada línea de la columna debe estar formateada con html y con estilo.<br>";
  echo "Utilizar la función del ejercicio anterior para darle el formato.<br>";
  echo "Utilizar la función de php random_int(\$inf,\$sup) para generar un número aleatorio entre \$inf y \$sup. Ver: <a href='https://www.php.net/manual/es/function.random-int.php' target='_blank'>https://www.php.net/manual/es/function.random-int.php</a><br>";
  echo "Probar las funciones en un programa. Utilizar el siguiente main()<br><br>";

const E_ABRE    = "<";       
  const E_ABREFIN = "</";      
  const E_CIERRE  = ">";       

  const PYC   = ";";           
  const ESP   = " ";           
  const INI   = "style=\"";    
  const FIN   = "\"";          

  const MODO      = "display: inline-block;";   
  const COLOR     = "color:";                   
  const BG_COLOR  = "background-color:";        
  const ANCHO     = "width:";                   

  function setEstilo($ancho, $colorFondo, $colorTexto){
    $ancho = ANCHO.$ancho.PYC;
    $bgColor = BG_COLOR.$colorFondo.PYC ;
    $color = COLOR.$colorTexto.PYC;
    return INI.MODO.$ancho.$color.$bgColor.FIN;
  }

  function setContenido($content, $etiqueta, $ancho, $colorTexto, $colorFondo){
    $estilo = setEstilo($ancho, $colorFondo, $colorTexto);
    $res = E_ABRE.$etiqueta.ESP.$estilo.E_CIERRE;
    $res = $res.$content;
    $res = $res.E_ABREFIN.$etiqueta.E_CIERRE;
    return $res;
  }

  function colAleatorio($cant, $inf, $sup){
    $res = "";
    $i=0;
    while ($i<$cant){
      $numAle = random_int($inf,$sup);
      if ($i%2==0){
        $linea = setContenido($numAle, "span", 100, "#04B9F8", "#F2F4F4");
      }else{
        $linea = setContenido($numAle, "span", 100, "#F2F4F4", "#04B9F8");
      }
      $res = $res.$linea."<br>";
      $i++;
    }
    return $res;
  }

  function main(){
    $inf = 0;
    $sup = 1000;
    $cant = 20;

    echo "<h3>$cant Aleatorios entre $inf y $sup</h3>";
    echo colAleatorio($cant, $inf, $sup);
  }

  main();



?>
