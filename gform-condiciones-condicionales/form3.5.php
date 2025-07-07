<?php
  function fun ($num){
    if($num>=0){
      if ($num==0) {
        $res = "|";
      }
      else {
        $res = "+";
      }
    }
    else{
      $res = "-";
    }
    return $res;
  }

  function main(){
    $res = fun(1).fun(0).fun(-3).fun(-1).fun(0);
    echo $res;
  }
  main();
?>
