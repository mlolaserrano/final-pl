<?php
  echo "5. Modificar la función anterior armarMail para que reciba un parámetro más \$dia qué contiene el día qué se debe retirar el premio.<br>";
  echo "Para ello, el contenido del mensaje estará marcado con la cadena {#diaRetiro}.<br>";
  echo "La función deberá reemplazar dicho marcador por el valor del día recibido por parámetro, además de realizar todo lo qué ya hace, según se programó en el ejercicio anterior.<br>";
  echo "El nombre de la nueva función deberá ser armarMail2.<br>";
  echo "<br>";
  echo "armarMail2(\$genero,\$nombre,\$apellido,\$mensaje,\$saludo,\$firma,\$dia)<br><br>";

  function obtenerPresentacion($genero){
    if ($genero=="f" || $genero=="F" ){
        $res="Estimada";
    }elseif($genero=="m" || $genero=="M" ){
        $res="Estimado";
    }else{
        $res="";
    }
    return $res;
  }

  function armarMail2($genero,$nombre,$apellido,$mensaje,$saludo,$firma,$dia){
    $presentacion = obtenerPresentacion($genero);
    $mensaje = str_replace("{#diaRetiro}",$dia,$mensaje);
    $txtMail=<<<TXT
    {$presentacion}, {$apellido} {$nombre}.<br>
    $mensaje<br>
    $saludo<br>
    $firma
TXT;
    return $txtMail;
  }

  function main(){
    $mensaje=<<<MSJ
Nos dirigimos a usted a fin de comunicarle que ha sido ganador del concurso "Diseño Sustentable". A partir del {#diaRetiro} podrá pasar por nuestra sucursal más cercana a retirar su premio.
MSJ;

    $dia="Lunes 18/03";
    $textoMail=armarMail2("f","Juliana","Lee",$mensaje,"Atentamente","Promoción HWS",$dia);
    echo $textoMail;

    echo "<hr>";

    $dia="Martes 19/03";
    $textoMail=armarMail2("m","Adrian","Sach",$mensaje,"Saludos","Equipo HWS",$dia);
    echo $textoMail;
  }

  main();


?>
