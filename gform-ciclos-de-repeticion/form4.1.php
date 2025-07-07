<?php
    function ciclow($msj){
        $i = 1;
        while($i < 5){
            echo $msj . "|";
            $i = $i + 1;
        }
    }

    function main(){
        ciclow("hola");
    }

    main();
?>
