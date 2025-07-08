<?php

  //CICLOS 

  function tabla1F($num){
    for ($i=1 ; $i<=10 ; $i++ ){
        echo $num." x ".$i." = ".($num*$i)."<br>";
    }
  }

  function tabla1W($num){
    $i=1;
    while ($i<=10){
        echo $num." x ".$i." = ".($num*$i)."<br>";
        $i++;
    }
  }

  function main(){
    echo "<h3>Tabla con ciclo 'for'</h3>";
    tabla1F(6);
    echo "<hr>";
    echo "<h3>Tabla con ciclo 'while'</h3>";
    tabla1W(6);
  }

  main();




?>
