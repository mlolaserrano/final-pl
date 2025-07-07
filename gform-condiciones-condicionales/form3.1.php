<?php
  function fun ($a,$b){
    $res=0;
    if($a<$b){
      $res = $a+$b;
    }
    return $res;
  }
  function main(){
    $res = fun(2,2);
    echo $res;
  }
  main();
?>
