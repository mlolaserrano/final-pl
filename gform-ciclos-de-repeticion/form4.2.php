<?php
    function ciclof($msj){
        $x = 3;
        $i = 0;
        for($i = 0; $i < $x; $i++){
            echo $msj . "|";
        }
    }

    function main(){
        ciclof("hola");
    }

    main();
?>

/*
Desde la función main, se llama a la función ciclof pasando como parámetro el string "hola".

Subimos a la función ciclof, que recibe el parámetro $msj (en este caso "hola").  

Dentro de ciclof:
— Se define la variable $x con el valor 3.
— Se inicializa $i en 0.

Se genera un ciclo for:
— Arranca con $i = 0.
— Mientras $i < $x (es decir, mientras $i sea menor a 3), el ciclo se repite.
— En cada vuelta, $i aumenta en 1.

Dentro del ciclo, en cada iteración se imprime el mensaje $msj seguido de un carácter "|".

Entonces, con $msj = "hola", la función imprime:
— "hola|"
— "hola|"
— "hola|"

Todo seguido en la misma línea.

Cuando termina el ciclo, la función finaliza y se vuelve a main.
*/
