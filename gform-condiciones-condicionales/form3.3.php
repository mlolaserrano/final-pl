<?php
  function fun ($num){

    if($num>=0){
      $res = "+";
    }else{
      $res = "-";
    }
    return $res;
  }

  function main(){

    $res = fun(1).fun(3).fun(-1);
    echo $res;
  }
  main();
?>
