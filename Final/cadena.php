<?php
  //Cadena 


  function cantLetras($cad){
    $cont=0;
    for($i=0; $i<strlen($cad); $i++){ //ciclo 
      // condicion                         
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


