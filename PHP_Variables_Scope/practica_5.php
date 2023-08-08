<?php
  /*
    PHP la palabra clave static

    Normalmente, cundo se completa/ejecuta una función, se eliminan todas sus variables. Sin embargo, a veces que NO se elimine una variable local.

    Para que no se borren usamos la palabra clave "static"
  */

  function myTest() {
    static $x = 0;
    echo $x . "<br>";
    $x++;
  }

  myTest();
  myTest();
  myTest();

  /*
    Entonces, cada vez que se llame a la función, esa varaible aún tendrá la información que contenía desde la última vez que se llamó la función.

    Nota: La variable sigue siendo local para la función.
  */
?>