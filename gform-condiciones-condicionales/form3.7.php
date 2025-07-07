<?php
function fun($val, $n) {
    $res = ($n != 0) && ($val % $n) == 0;
    return (int)$res;
}

?>
