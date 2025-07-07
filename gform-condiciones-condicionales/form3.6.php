<?php
  function mayorDeTres($a,$b,$c){
    if ($a>=$b){              
        if ($a>=$c){          
            $maxi = $a;
        }
        else{
            $maxi = $c;
        }
    }
    else{
        if ($b>=$c){          
            $maxi = $b;
        }
        else{
            $maxi = $c;
        }
    }
    return $maxi;             
  }

  function main(){
    echo mayorDeTres(10,20,30)."<br>";
    echo mayorDeTres(100,20,30)."<br>";
    echo mayorDeTres(10,200,30)."<br>";
  }

  main();
?>

