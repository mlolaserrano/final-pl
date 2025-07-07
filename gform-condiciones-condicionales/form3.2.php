<?php
  function fun ($msj1,$msj2,$nom){
    $res="-";
    if($nom=="h"){
      $res = $msj1."-".$nom;
    }else{
      $res = $msj2."-".$nom;
    }
    return $res;
  }

  function main(){
    $res="*";
    $msj1="Hola";
    $msj2="Chau";
    $nom="juan";
    $res = fun($msj1,$msj2,$nom);
    echo $res;
  }
  main();
?>
