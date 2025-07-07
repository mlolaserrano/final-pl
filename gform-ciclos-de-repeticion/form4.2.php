<?php
    function ciclof($msj){
        $x = 3;
        $i = 0;
        for($i = 0; $i < $x; $i++){
            echo $msj . "|";
        }
    }

    function main(){
        ciclof("hola");
    }

    main();
?>
