<?php   

function fun($cadena, $a, $b){
    $encontro = false;
    $res = "";
    $i = 0;
    while($i < strlen($cadena)) {
        if ($cadena[$i] == $a && $encontro == false) {
            $cadena[$i] = $b;
            $encontro = true;
        }
        $res = $res . $cadena[$i];
        $i = $i + 1;
    }
    return $res;
}

function main(){
    $cad = "Hola, hoy es un día de frío y lluvia";
    $nuevaCadena = fun($cad, "a", "A");
    echo $nuevaCadena;
}
main();
?>