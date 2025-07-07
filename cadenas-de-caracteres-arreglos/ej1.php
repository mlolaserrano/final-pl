<?php
  echo "1. Desarrollar la función cantLetras que recibe por parámetro una cadena.<br>";
  echo "La función debe retornar la cantidad de letras perteneciente al abecedario que tiene la cadena.<br>";
  echo "No tener en cuenta la ñ o Ñ y tampoco tener en cuenta las vocales acentuadas tanto en mayúscula como en minúscula.<br>";
  echo "<b>Nota:</b> puede observar la tabla <a href='https://www.asciitable.com/' target='_blank'>ASCII</a> para poder armar la condición de la condicional para implementar el conteo.<br>";
  echo "<br>Probar las funciones en un programa. Utilizar el siguiente main()<br><br>";

  function cantLetras($cad){
    $cont=0;
    for($i=0; $i<strlen($cad); $i++){ //ciclo 
      // condicion                         o
      if (($cad[$i]>='A' && $cad[$i]<='Z') || ($cad[$i]>='a' && $cad[$i]<='z')){
        $cont=$cont+1;
      }
    }
    return $cont;
  }

  function main(){
    $frase = "Si si, que dificil se esta haciendo esto !!";
    $res = cantLetras($frase);

    echo "<p>En la frase: </p>";
    echo "<p><b>$frase</b></p>";
    echo "<p>La cantidad de letras es: <b>$res</b></p>"; //caracter especial
    echo "<p>La cantidad de caracteres es: <b>" . strlen($frase) . "</b></p>"; //conteo  
  }                                              

  main();


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px;background-color: #cccccc; border-color:#cccccc;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px; '>5</button></a>";
?>
