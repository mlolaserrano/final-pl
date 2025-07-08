<?php
  //Condicionales 

  function fun ($num){
    if($num<=-10){
      $res = "#";
    }
    elseif ($num==0) {
      $res = "0";
    }
    elseif ($num>0 && $num<=10){
      $res = "@";
    }
    else{
      $res = "?";
    }
    return $res;
  }

  function main(){
    $res = fun(11).fun(0).fun(-30).fun(-1).fun(0);
    echo $res;
  }
  main();
?>


