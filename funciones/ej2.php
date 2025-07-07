<?php
echo "2. Desarrollar la función <code>obtenerLinea</code> que recibe tres parámetros. La función debe retornar un string qué contenga los tres parámetros y formateados en html y con estilo en línea y separados (espaciados uno de otros).<br> Utilizar la función <code>obtenerLinea</code> en un programa (<code>función main()</code>). La deberá invocar 4 veces y pasarle los parámetros correspondientes para lograr con cada retorno de la función, imprimir en el navegador la salida esperada.";

const INI = "style='";
const FIN = "'";
const MODO = "display: inline-block;";
const ANCHO = "width:100px;";
const ESTILO = INI . MODO . ANCHO . FIN;

function obtenerLinea($a, $b, $c){
    $linea = "";
    $linea .= "<span ".ESTILO.">".$a."</span>";
    $linea .= "<span ".ESTILO.">".$b."</span>";
    $linea .= "<span ".ESTILO.">".$c."</span>";
    $linea .= "<br>";
    return $linea;
}

function main(){
    echo obtenerLinea("NOMBRE", "APELLIDO", "DNI");
    echo obtenerLinea("Clara", "López", "324456");
    echo obtenerLinea("Lilian", "Saturn", "966078");
    echo obtenerLinea("Alberto", "Pardian", "23056");
}

main();


?>
