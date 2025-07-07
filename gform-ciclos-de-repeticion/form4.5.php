<?php
    function fun($ini,$fin){
        $res="+";
        $band=true;
        $i=$ini;
        while(($i<$fin) && $band){
            if ($i%2==0){
                $res=$res."@";
            }else{
                $res=$res."#";
                $band=false;
            }
            $i++;
        }
        return $res;
    }

    function main(){
        echo fun(1,4);
    }

    main();
?>
