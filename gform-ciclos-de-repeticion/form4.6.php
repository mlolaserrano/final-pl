<?php
function fun($cant, $inf, $sup){
    $ancho= "display:inline-block;width: 100";
    $estilo1= " style = '$ancho;background-color: #82E0AA;'";
    $estilo2= " style = '$ancho;background-color: #F9E79F;'";
    $estilo3= " style = '$ancho;background-color: #F1948A;'";
    
    $res = "";
    $i=0;
    while ($i < $cant) {
        $numAle = random_int($inf, $sup);  
        if ($numAle < ($sup/3)) {
            $linea = "<span $estilo1>$numAle</span>";  
        } elseif ($numAle < 2*($sup/3)) {
            $linea = "<span $estilo2>$numAle</span>";
        } else {
            $linea = "<span $estilo3>$numAle</span>";
        }
        $res = $res . $linea . "<br>";  
        $i++; 
    }
    return $res;
}

function main(){
    echo fun(8, 0, 99);
}
main();
?>
