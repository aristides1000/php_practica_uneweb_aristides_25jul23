<?php
  /* 
    PHP tambien almacena todas las variables globales en una matriz llamada "$GLOBALS[index] index". contiene el nombre de la variable. También se puede acceder a esta matriz desde dentro de las funciones y se puede usar para actualizar variables globales directamente.
  */

  $x = 5;
  $y = 10;

  function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }

  myTest();
  echo $y;
?>