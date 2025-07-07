<?php
  const INI = "style='";
  const FIN = "'";
  $modo   = "display: inline-block;";
  $ancho  = "width:50;";
  $estilo = INI.$ancho.$modo.FIN;

  $res = "<span ".$estilo.">AAA</span>";
  $res = $res. "<span ".$estilo.">BBB</span>";
  $res = $res. "<span ".$estilo.">CCC</span>";

  echo $res;
?>
