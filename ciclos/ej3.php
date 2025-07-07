<?php
  echo "3. Desarrollar dos funciones:<br>";
  echo "(1) Nuevamente realizar la función tabla del ejercicio anterior. Esta vez elegir con qué ciclo (for o while) producir la tabla y debe retornar el contenido de la tabla donde cada línea está delimitada con una etiqueta y al final un &lt;br&gt; y además debe contener estilo. La función tabla(\$num,\$etiqueta,\$ancho,\$colorTexto,\$colorFondo) recibe por parámetro :<br>";
  echo "\$num: Es un número entero para hacer la tabla de multiplicar<br>";
  echo "\$etiqueta: Es la etiqueta qué hay qué colocarle a cada línea<br>";
  echo "\$ancho: Es el ancho de la columna de la tabla<br>";
  echo "\$colorTexto: Es el color del texto<br>";
  echo "\$colorFondo: Es el color del fondo<br>";
  echo "La función tabla debe llamar a la función setContenido para le de formato html y coloque estilo al contenido de cada una de la línea generada..<br><br>";

  echo "(2) La función setContenido(\$content,\$etiqueta,\$ancho,\$colorTexto,\$colorFondo) retorna una cadena con el contenido de \$content rodeado de las \$etiqueta html y con el estilo utilizando \$ancho,\$colorTexto,\$colorFondo.<br><br>";

  const E_ABRE    = "<";   
  const E_ABREFIN = "</";  
  const E_CIERRE  = ">";   

  const PYC  = ";";        
  const ESP  = " ";        
  const INI  = "style=\""; 
  const FIN  = "\"";       

  const MODO      = "display: inline-block;";  
  const COLOR     = "color:";                  
  const BG_COLOR  = "background-color:";       
  const ANCHO     = "width:";                  

  function setEstilo($ancho, $colorFondo, $colorTexto){
    $ancho   = ANCHO.$ancho.PYC;
    $bgColor = BG_COLOR.$colorFondo.PYC;
    $color   = COLOR.$colorTexto.PYC;
    return INI.MODO.$ancho.$color.$bgColor.FIN;
  }

  function setContenido($content, $etiqueta, $ancho, $colorTexto, $colorFondo){
    $estilo = setEstilo($ancho, $colorFondo, $colorTexto);
    $res  = E_ABRE.$etiqueta.ESP.$estilo.E_CIERRE;
    $res .= $content;
    $res .= E_ABREFIN.$etiqueta.E_CIERRE;
    return $res;
  }

  function obtenerTabla($num, $etiqueta, $ancho, $colorTexto, $colorFondo){
    $res = "";
    $i = 1;
    while ($i <= 10){
      $linea = $num." x ".$i." = ".($num*$i);
      if ($i%2==0){
        $linea = setContenido($linea, $etiqueta, $ancho, $colorTexto, $colorFondo);
      } else {
        $linea = setContenido($linea, $etiqueta, $ancho, $colorFondo, $colorTexto);
      }
      $res .= $linea."<br>";
      $i++;
    }
    return $res;
  }

  function main(){
    echo "<h3>Tabla</h3>";
    echo obtenerTabla(6, "span", 100, "#04B9F8", "#F83204");
  }

  main();


?>
