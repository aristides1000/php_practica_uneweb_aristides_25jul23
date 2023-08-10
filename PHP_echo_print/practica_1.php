<?php
  /*
    PHP echo and print statement

    Con PHP hay dos formas básicas de obtener resultados: "echo" y "print".

    "echo" y "print" son más o menos lo mismo. Ambos se utilizan para enviar datos a la pantalla.

    Las diferencias son pequeñas: "echo" no tiene valor de retorno mientras que "print" tiene un valor de retorno de 1 por lo que puede usarse en expresiones. "echo" puede tomar múltiples parámetros (aunque tal uso es poco común) mientras que "print" puede tomar un argumento. "echo" es marginalmente más rágido que "print".
  */

  /*
    PHP echo statement

    La declaración "echo" se puede utilizar con o sin paréntesis: "echo" o "echo()".

    Mostrar texto

    El siguiente ejemplo muestra como generar texto con "echo" (observe que el texto puede contener HTML):
  */

  echo "<h2>PHP es divertido</h2>";
  echo "Hola mundo!<br>";
  echo "Estoy aprendiendo PHP!<br>";
  echo "Esta", "es ", "una ",
  "cadena ", "de ", "caracteres ",
  "con ", "multiples parametros";
?>