<?php
  function fun ( $a , $b ){
    $res = $a+$b;
    return $res;
  }

  function calcular ( $a , $b, $c ){
    $res = $a*$b - fun($b,$c);
    return $res;
  }

  function main(){
    $total = calcular( 10 , 20 ,30);
    echo($total);
  }

  main();
?>
