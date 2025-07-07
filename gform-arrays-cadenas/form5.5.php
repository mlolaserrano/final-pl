<?php
function fun($arr){
    $res = "";
    $i = count($arr) - 1;
    sort($arr, 0); 

    while ($i >= 0){
        if ($res == ""){
            $res = $arr[$i];
        } else {
            $res = $res . "-" . $arr[$i];
        }
        $i--;
    }
    return $res;
}

function main(){
    $arr = ["enero", "febrero", "marzo", "abril", "mayo", "junio"];
    $res = fun($arr);
    echo($res);
}
main();
?>
