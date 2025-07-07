<?php
  echo "2. Desarrollar dos funciones. Una función <b>cantVocales</b> y otra función <b>cantConsonantes</b>.<br>";
  echo "<b>cantVocales:</b> Recibe una cadena. Retorna la cantidad de vocales qué contiene la cadena. No tener en cuenta las vocales con acento.<br>";
  echo "<b>cantConsonantes:</b> Recibe una cadena. Retorna la cantidad de consonantes qué contiene la cadena. No tener en cuenta la ñ o Ñ.<br>";
  echo "Probar las funciones en un programa. Utilizar el siguiente main().<br><br>";

  function cantVocales($cad){
    $cadVoc = "aeiouAEIOU";
    $cont = 0;
    for($i = 0; $i < strlen($cad); $i++){
         
      if (strpos($cadVoc, $cad[$i]) !== false){ //negacion
        $cont++;
      }
    }
    return $cont;
  }

  function cantConsonantes($cad){
    $cadCons = "bcdfghjklmnpqrstvwxzyBCDFGHJKLMNPQRSTVWXZY";
    $cont = 0;
    for($i = 0; $i < strlen($cad); $i++){
      if (strpos($cadCons, $cad[$i]) !== false){
        $cont++;
      }
    }
    return $cont;
  }

  function main(){
    $frase = "Si sí, que difícil se está haciendo esto !!";
    $voc = cantVocales($frase);
    $con = cantConsonantes($frase);

    echo "<p>En la frase: </p>";
    echo "<p><b>$frase</b> <br></p>";
    echo "<p>La cantidad de Vocales es: <b>$voc</b></p>";
    echo "<p>La cantidad de Consonantes es: <b>$con</b></p>";
    echo "<p>La cantidad de caracteres es: <b>".strlen($frase)."</b></p>";
  }

  main();


?>
