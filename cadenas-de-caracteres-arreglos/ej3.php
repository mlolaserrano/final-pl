<?php
  echo "3. Desarrollar <b>colorearTexto</b> que recibe tres parámetros:<br>";
  echo "<b>\$texto</b>: una cadena de caracteres grande.<br>";
  echo "<b>\$cad</b>: una cadena mucho más pequeña que la anterior.<br>";
  echo "<b>\$color</b>: una cadena que contiene un código de color.<br>";
  echo "La función debe retornar la cadena <b>\$texto</b> modificada, en donde cada vez que aparece <b>\$cad</b> se le agrega el estilo para que en el navegador aparezca con el <b>\$color</b> de fondo pasado por parámetro.<br>";
  echo "Probar las funciones en un programa. Utilizar el siguiente <code>main()</code><br><br>";

  function colorearTexto($texto, $cad, $color){
    $reemplazo = "<span style='background-color:".$color.";'>".$cad."</span>";
    $texto = str_replace($cad, $reemplazo, $texto);
    return $texto;
  }

  function main(){
    //hecdocs
    $txt = <<<TEXTO
    
<p>Cuidar el mundo que nos rodea y contiene es cuidarnos a nosotros mismos.
Pero necesitamos constituirnos en un 'nosotros' que habita la casa común.
Frecuentemente las voces que se levantan para la defensa del medio ambiente 
son acalladas o ridiculizadas, disfrazando de racionalidad lo que son sólo intereses particulares.</p>
<p>Hemos crecido en muchos aspectos, aunque somos analfabetos en acompañar, 
cuidar y sostener a los más frágiles y débiles de nuestras sociedades desarrolladas. 
Nos acostumbramos a mirar para el costado, a pasar de lado, 
a ignorar las situaciones hasta que estas nos golpean directamente.</p>
TEXTO;

    echo "<h3>TEXTO:</h3>";
    $txt = colorearTexto($txt, "s", "#A3E4D7");
    echo $txt;
  }

  main();


?>
