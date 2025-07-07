<?php
function fun($cad, $c){
    $res = "";
    for($i=0; $i<strlen($cad); $i++){
        $res = $res . $cad[$i] . $c;
    }
    return $res;
}

function main(){
    $cad = "Domingo";
    $nuevaCadena = fun($cad, "-");
    echo $nuevaCadena;
}
main();

?>
