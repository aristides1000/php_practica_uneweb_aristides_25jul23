<?php
  /*
    la palabra clave "global" se utiliza para acceder a una variable global desde dentro de una función.

    para hacer esto, use la palabra clave "global" antes de las variables (dentro de la función):
  */

  $x = 5;
  $y = 10;

  function myTest() {
    global $x, $y;
    $y = $x + $y;
  }

  myTest();
  echo $y;
?>