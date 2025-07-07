<?php
  echo "3. Desarrollar la función obtenerTexto qué recibe por parámetro y estos son \$texto : Es el texto contenido <br>";
  echo "\$etiqueta : Es la etiqueta html qué deberá rodear al texto <br>";
  echo "\$color : es el color del texto. Es un string de la forma “#ffff678” <br>";
  echo "\$ancho : es un número entero qué representa el ancho ‘padding’ en pixel. <br>";
  echo "\$colorFondo : es el color de fondo del texto. Es un string de la forma “#ffff678”<br><br>";

  echo "La función deberá retornar un string con el texto comprendido entre la \$etiqueta html pasada por parámetro y con el estilo conformado por los parámetros \$color , \$ancho y \$colorFondo.<br><br>";

  echo "Utilizar la función obtenerTexto en un programa ( función main() ). La deberá invocar completando los parámetros correspondientes para obtener en pantalla (navegador) lo qué se muestra en el ejemplo de salida.<br><br>";

  const INI = "style='";
  const FIN = "'";
  const MODO = "display: inline-block;";
  
  function obtenerTexto($texto, $etiqueta, $ancho, $colorTexto, $colorFondo){
    $anchoEstilo = "width:".$ancho.";";
    $fondo = "background-color:".$colorFondo.";";
    $color = "color:".$colorTexto.";";
  
    $estilo = INI.MODO.$anchoEstilo.$color.$fondo.FIN;
    $res = "<".$etiqueta." ".$estilo.">".$texto."</".$etiqueta.">";
  
    return $res;
  }

  function main(){
    echo obtenerTexto ("Hola PL", "span",100,"#F83204","#04B9F8 ");
    echo obtenerTexto ("Hola PL", "span",100,"#04B9F8","#F83204");
  }
  main();

 

?>
