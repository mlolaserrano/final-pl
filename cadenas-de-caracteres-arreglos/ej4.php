<?php
  echo "4. Desarrollar la función:<br>";
  echo "armarMail(\$genero,\$nombre,\$apellido,\$mensaje,\$saludo,\$firma)<br>";
  echo "qué recibe 6 parámetros, qué más abajo se detallan. La función deberá retornar una cadena con un formato de un mail colocando tal cual se muestra en la salida esperada.<br><br>";

  echo "<b>\$genero:</b> Es el genero de la persona a la qué va dirigido. Puede ser “f” o “m”.<br>";
  echo "<b>\$nombre:</b> Es el nombre de la persona a quien va dirigido el mail.<br>";
  echo "<b>\$apellido:</b> Es el apellido de la persona a quien va dirigido el mail.<br>";
  echo "<b>\$mensaje:</b> Es el mensaje en sí del mail.<br>";
  echo "<b>\$saludo:</b> Es el saludo que aparece abajo en el mail, sobre la firma.<br>";
  echo "<b>\$firma:</b> Es la firma de quien envía el mail.<br><br>";

  echo "<b>Nota:</b> observar qué se utiliza \$genero para determinar si se debe consignar en la cadena a imprimir la palabra ‘Estimado’ o bien ‘Estimada’ dependiendo del valor de \$genero.<br><br>";
  echo "Probar las funciones funciones en un programa. Utilizar el siguiente main()<br><br>";

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

  function armarMail($genero,$nombre,$apellido,$mensaje,$saludo,$firma){
    $presentacion = obtenerPresentacion($genero);
    $txtMail=<<<TXT
<p>{$presentacion}, {$apellido} {$nombre}.</p>
<p>$mensaje</p>
<span>$saludo</span><br>
<span>$firma</span>
TXT;

    return $txtMail;
  }

  function main(){
    $mensaje=<<<MSJ
Nos dirigimos a usted a fin de comunicarle que ha sido ganador del concurso “Diseño Sustentable”. A partir del Lunes 18/03 podrá pasar por nuestra sucursal más cercana a retirar su premio.
MSJ;

    $textoMail=armarMail("f","Juliana","Lee",$mensaje,"Atentamente","Promoción HWS");
    echo $textoMail;

    echo "<hr>";
    $textoMail=armarMail("m","Adrian","Sach",$mensaje,"Saludos","Equipo HWS");
    echo $textoMail;
  }


?>
