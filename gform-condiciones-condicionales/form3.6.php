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

/*
Desde la función main, primero se llama a la función mayorDeTres tres veces, cada vez con tres números diferentes.  
Los resultados se imprimen en pantalla, cada uno seguido de un <br> para saltar de línea.

Subimos a la función mayorDeTres, que recibe tres parámetros: $a, $b y $c.

Primero se compara $a con $b:  
— Si $a es mayor o igual a $b, entonces todavía hay que verificar si también es mayor o igual a $c.
    → Si $a ≥ $c, entonces $a es el mayor y se guarda en la variable $maxi.
    → Si no, significa que $c es mayor, y se guarda $c en $maxi.

Si la primera comparación resulta que $a < $b, entonces se entra al else:  
— Acá se compara $b con $c:
    → Si $b ≥ $c, entonces $b es el mayor y se guarda en $maxi.
    → Si no, $c es el mayor y se guarda en $maxi.

Al final, la función devuelve el valor de $maxi, que es el número más grande de los tres.

En main se imprimen estos resultados:
— mayorDeTres(10,20,30) → devuelve 30
— mayorDeTres(100,20,30) → devuelve 100
— mayorDeTres(10,200,30) → devuelve 200
*/
