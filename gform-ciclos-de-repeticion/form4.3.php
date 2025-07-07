<?php
    function fun($ini,$inf,$sup){
        $sum = $ini;
        for($i=$inf; $i<$sup; $i++){
            $sum = $sum + $i;
        }
        return $sum;
    }

    function main(){
        echo fun(2,1,2);
    }

    main();
?>
