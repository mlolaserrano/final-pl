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


    echo "<br>";
    
    echo "<a href='../salida-variables-operadores/ej1.php'><button style='margin: 5px; '>Unidad 1</button></a>";
    echo "<a href='../funciones/ej1.php'><button style='margin: 5px;'>Unidad 2</button></a>";
    echo "<a href='../condiciones-logicas-condicionales/ej1.php'><button style='margin: 5px;'>Unidad 3</button></a>";
    echo "<a href='../ciclos/ej1.php'><button style='margin: 5px;'>Unidad 4</button></a>";
    echo "<a href='../cadenas-de-caracteres-arreglos/ej1.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>Unidad 5</button></a>";

  echo "<br>";
  echo "<a href='ej1.php'><button style='margin: 5px;'>1</button></a>";
  echo "<a href='ej2.php'><button style='margin: 5px; background-color: #cccccc; border-color:#cccccc;'>2</button></a>";
  echo "<a href='ej3.php'><button style='margin: 5px;'>3</button></a>";
  echo "<a href='ej4.php'><button style='margin: 5px;'>4</button></a>";
  echo "<a href='ej5.php'><button style='margin: 5px;'>5</button></a>";
?>
