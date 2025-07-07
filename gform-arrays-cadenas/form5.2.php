<?php
function fun($cad){
    $band = true;           
    $res = "";              
    for($i=0; $i<strlen($cad); $i++){
        if ($band){
            $res = $res . "-" . $cad[$i];
            $band = false;
        }else{
            $res = $res . "+" . $cad[$i];
            $band = true;
        }
    }
    return $res;
}

function main(){
    $cad = "246";
    $nuevaCadena = fun($cad);
    echo $nuevaCadena;
}
main();

?>

