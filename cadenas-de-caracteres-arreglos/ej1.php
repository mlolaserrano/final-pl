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



?>
