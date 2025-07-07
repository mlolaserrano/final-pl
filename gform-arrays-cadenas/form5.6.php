<?php
function fun($arr, $x){
    $i = 0;
    while($i < count($arr)){
        if($arr[$i] < $x){
            $arr[$i] = $arr[$i] + $x; //x = 30
        }
        $i++;
    }
    return $arr;
}

function main(){
    $arr = [53, 10, 30, 12, 52, 60, 70];
    // 0 1 2 3 4 5 6 
    $arr = fun($arr, $arr[2]); // $arr[2] = 30
    echo "|";
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] . "|";
    }
}
main();
?>
