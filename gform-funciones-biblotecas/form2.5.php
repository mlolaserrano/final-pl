<?php
const MODO = "display: inline-block;"; 
const COLOR = "color:";                
const BG_COLOR = "background-color:";  
const ANCHO = "width:";                

function setStyle($ancho, $colorFondo, $colorTexto){
  $ancho = ANCHO . $ancho . ";";
  $bgColor = BG_COLOR . $colorFondo . ";";
  $color = COLOR . $colorTexto . ";";
  return "style='" . MODO . $ancho . $color . $bgColor . "'";
}

function setContent($content, $etiqueta, $ancho, $colorTexto, $colorFondo){
  $estilo = setStyle($ancho, $colorFondo, $colorTexto);
  $res = "<" . $etiqueta . " " . $estilo . ">";
  $res .= $content;
  $res .= "</" . $etiqueta . ">";
  return $res;
}

function main(){
  $txt = "Hola PL";
  $content1 = setContent($txt, "h2", 100, "#F83204", "#04B9FB");  
  $content2 = setContent($txt, "span", 100, "#04B9FB", "#F83204"); 
  echo $content1 . $content2;
}

main();
?>
