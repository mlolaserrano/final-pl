<?php
function obtenerLinea($color,$dato){
    $ancho = "display:inline-block;width: 100;";
    $estilo= "style = '$ancho;background-color: $color;'";
    $linea = "<span $estilo>$dato</span>"; // ← A
    return $linea;
}

function fun($datos,$colores,$lim){
    $res = "";
    $cant= count($datos); // ← B
    for($i=0;$i<$cant;$i++){
        if($datos[$i]<($lim/3)){
            $linea = obtenerLinea($colores[0],$datos[$i]); // ← C
        }elseif($datos[$i]>=($lim/3) && ($datos[$i]<2*($lim/3))){
            $linea = obtenerLinea($colores[1],$datos[$i]); // ← D
        }else{
            $linea = obtenerLinea($colores[2],$datos[$i]);
        }
        $res = $res.$linea."<br>";
    }
    return $res;
}

function main(){
    $colores=["#82E0AA","#F9E79F","#F1948A"];
    $datos = [72,52,3,75,68,52,4,44];
    echo fun($datos,$colores,99); // ← E
}
main();
?>
