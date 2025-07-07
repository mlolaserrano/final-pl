<?php
function fun($d, $c, $b, $a) {
    $largo = strlen($a);      
    $r = "";                  

    for ($i = 0; $i < 3 && $i < $largo; $i++) {
        $r = $r . $a[$i];     
    }

    $texto = <<<TXT
{$r} {$b} de {$c} de {$d}
TXT;

    
    $b = 29;

    return $texto;
}

function main() {
    $res = fun(2022, "Mayo", 30, "Lunes");
    echo $res;
}

main();
?>
