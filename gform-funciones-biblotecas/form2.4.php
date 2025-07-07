<?php
  function fun2($a,$b){
    $res = $a;
    $res = $b;
    return $res;
  }

  function fun1 ($a,$b){
    $res = "";
    $res = $res.$a;
    $res = $res.$b.fun2($a,$b);
    return $res;
  }

  function main(){
    echo fun1("12","3").fun2("4","21");
  }

  main();
?>
