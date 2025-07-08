<?php

  function deBoolAInt ($valorLogico){
    return (int)$valorLogico;
  }

  function main(){
    echo "Para true, el valor entero equivalente es: ".deBoolAInt (true)."<br>";
    echo "Para false, el valor entero equivalente es: ".deBoolAInt (false)."<br>";
  }

  main();


?>


