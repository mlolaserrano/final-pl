<?php
  num1 = 98;
  $num2 = 200;
  $var1 = "<span>";
  $var2 = "</span>"  // ACA ESTA EL ERROR
  $res = $var1.($num1+$num2).$var1;
  echo $res;
?>
