<?php
    function fun($ini,$fin){
        $res="+";
        for($i=$ini; $i<$fin; $i++){
            if ($i%2==0){
                $res=$res."@";
            }else{
                $res=$res."#";
            }
        }
        return $res;
    }

    function main(){
        echo fun(1,3);
    }

    main();
?>
