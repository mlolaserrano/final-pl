<?php
  echo "4. Desarrollar un programa que muestre por pantalla (navegador) un listado de nombre, apellido separados con dos barras “||”, de acuerdo a las salidas ejemplo. Pero esta vez almacene los títulos en constantes y los datos en variables; luego imprime en pantalla.<br><br>";

  const NOM = "Nombre";
  const APE = "Apellido";
  const SEP = "||";

  $nombre1 = "Clara";
  $apellido1 = "Lopez";

  $nombre2 = "Alberto";
  $apellido2 = "Pardian";

  echo NOM, SEP, APE;
  echo "<br>";
  echo $nombre1, SEP, $apellido1;
  echo "<br>";
  echo $nombre2, SEP, $apellido2;


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px; '>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";
?>
